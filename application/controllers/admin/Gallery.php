<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $gallery = $this->mGallery->getGallery();

    $data = array(
      'title'    => 'gallery Gereja',
      'user'  => $user,
      'gallery'    => $gallery,
      'isi'    => 'admin/gallery/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_gallery()
  {

    $user = $this->mAdmin->getData();
    $gallery = $this->mGallery->getGallery();
    $event = $this->mGallery->getEvent();

    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {

      $config['upload_path']     = './assets/img/gallery/';
      $config['allowed_types']   = 'gif|jpg|png';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'      => 'Create gallery Gereja',
          'user'  => $user,
          'gallery'  => $gallery,
          'event'  => $event,
          'isi'      => 'admin/gallery/create'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/gallery/' . $upload_data['uploads']['file_name'];
        $config['new_image']     = './assets/img/gallery/thumbs/';
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width']       = 150; // Pixel
        $config['height']       = 150; // Pixel
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $i = $this->input;
        $data = array(
          'image'      => $upload_data['uploads']['file_name'],
          'image_name'  => $i->post('image_name'),
          'title'  => $i->post('title'),
          'event'  => $i->post('event'),
          'date'      => date('Y-m-d'),
        );
        $this->mGallery->createGallery($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/gallery/'));
      }
    }
    $data = array(
      'title'    => 'Create gallery Gereja',
      'user'  => $user,
      'gallery'  => $gallery,
      'event'  => $event,
      'isi'    => 'admin/gallery/create'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_gallery($gallery_id)
  {
    $user = $this->mAdmin->getData();
    $gallery  = $this->mGallery->detailGallery($gallery_id);
    $event = $this->mGallery->getEvent();

    // Validation
    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/gallery/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'      => 'Edit gallery Gereja',
            'user'  => $user,
            'gallery' => $gallery,
            'event' => $event,
            'isi'      => 'admin/gallery/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($gallery['image'] != "") {
            unlink('./assets/img/gallery/' . $gallery['image']);
            unlink('./assets/img/gallery/thumbs/' . $gallery['image']);
          }
          $upload_data        = array('uploads' => $this->upload->data());
          $config['image_library']  = 'gd2';
          $config['source_image']   = './assets/img/gallery/' . $upload_data['uploads']['file_name'];
          $config['new_image']     = './assets/img/gallery/thumbs/';
          $config['create_thumb']   = TRUE;
          $config['quality']       = "100%";
          $config['maintain_ratio']   = FALSE;
          $config['width']       = 360; // Pixel
          $config['height']       = 200; // Pixel
          $config['x_axis']       = 0;
          $config['y_axis']       = 0;
          $config['thumb_marker']   = '';
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

          $i = $this->input;

          $data = array(

            'gallery_id'    => $gallery['gallery_id'],
            'image'      => $upload_data['uploads']['file_name'],
            'image_name'  => $i->post('image_name'),
            'title'  => $i->post('title'),
            'event'  => $i->post('event'),
            'date'      => date('Y-m-d'),
          );

          $this->mGallery->editGallery($data);
          $this->session->set_flashdata('sukses', 'Success');
          redirect(base_url('admin/gallery'));
        }
      } else {

        $i = $this->input;
        $data = array(
          'gallery_id'    => $gallery['gallery_id'],
          'image_name'  => $i->post('image_name'),
          'title'  => $i->post('title'),
          'event'  => $i->post('event'),
          'date'      => date('Y-m-d'),
        );

        $this->mGallery->editGallery($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/gallery'));
      }
    }

    $data = array(

      'title'    => 'Edit gallery gereja',
      'gallery'  => $gallery,
      'user'  => $user,
      'event'  => $event,
      'isi'    => 'admin/gallery/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete gallery
  public function delete_gallery($id)
  {
    $data = array('gallery_id' => $id);
    $this->mGallery->deleteGallery($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete gallery Succsess!</div>');
    redirect(base_url('admin/gallery'));
  }

  // event
  public function event()
  {
    $user = $this->mAdmin->getData();
    $event = $this->mGallery->getEvent();

    $this->form_validation->set_rules('name', 'name', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Event',
        'user'  => $user,
        'event'  => $event,
        'isi'    => 'admin/gallery/event'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'name' => $this->input->post('name')
      ];
      $this->mGallery->createEvent($data);
      $this->session->set_flashdata('messevent', '<div class="alert alert-success" role="alert">
      New Event Added!</div>');
      redirect('admin/gallery/event');
    }
  }

  public function edit_event($id)
  {

    $data = array(
      'event_id' => $id,
      'name' => $this->input->post('name')
    );

    $this->mGallery->editEvent($data);
    $this->session->set_flashdata('messevent', '<div class="alert alert-success" role="alert">
        Edit event success!</div>');
    redirect('admin/gallery/event');
  }

  public function delete_event($id)
  {
    $data = array('event_id' => $id);
    $this->mGallery->deleteEvent($data);
    $this->session->set_flashdata('messevent', '<div class="alert alert-success" role="alert">
    Delete event success!</div>');
    redirect('admin/gallery/event');
  }
}
