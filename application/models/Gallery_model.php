<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
  // Listing Artikels
  public function getGallery()
  {
    $this->db->select('*');
    $this->db->from('gallery');
    $this->db->join('event', 'event.event_id = gallery.event', 'LEFT');
    $this->db->order_by('gallery_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createGallery($data)
  {
    $this->db->insert('gallery', $data);
  }

  // Detail gallery
  public function detailGallery($gallery_id)
  {
    $this->db->select('*');
    $this->db->from('gallery');
    $this->db->where('gallery_id', $gallery_id);
    $this->db->order_by('gallery_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit gallery
  public function editGallery($data)
  {
    $this->db->where('gallery_id', $data['gallery_id']);
    $this->db->update('gallery', $data);
  }

  // Delete gallery
  public function deleteGallery($data)
  {
    $this->db->where('gallery_id', $data['gallery_id']);
    $this->db->delete('gallery', $data);
  }


  // event
  public function getEvent()
  {
    $this->db->select('*');
    $this->db->from('event');
    $this->db->order_by('event_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createEvent($data)
  {
    $this->db->insert('event', $data);
  }

  // Detail event
  public function detailEvent($id)
  {
    $this->db->select('*');
    $this->db->from('event');
    $this->db->where('event_id', $id);
    $this->db->order_by('event_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit event
  public function editEvent($data)
  {
    $this->db->where('event_id', $data['event_id']);
    $this->db->update('event', $data);
  }

  // Delete event
  public function deleteEvent($data)
  {
    $this->db->where('event_id', $data['event_id']);
    $this->db->delete('event', $data);
  }
}
