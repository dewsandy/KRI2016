<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class berita_m extends My_Model{
		
		function __construct(){
			parent::__construct();
		}
						
		function get_berita_admin($s='', $lim = 5,$off = 0, $id=''){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori   WHERE id_group = 1 AND";
			if(!empty($id)){
				$sql.=" a.id_kategori=$id AND ";
			}
			$sql.=" judul LIKE '%$s%' order by tanggal DESC LIMIT $off,$lim";
			$b = $this->db->query($sql);
			$row = $b->result();
			$b->free_result();
			return $row;
		}
		
		function get_total_berita_admin($s,$id){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori   WHERE id_group = 1 AND";
			if(!empty($id)){
				$sql.=" a.id_kategori=$id AND ";
			}
			$sql.=" judul LIKE '%$s%' order by tanggal DESC";
			$b = $this->db->query($sql);
			$row = $b->num_rows();
			$b->free_result();
			return $row;
		}			
		
		function get_info_admin($s='', $lim = 5,$off = 0, $id=''){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori   WHERE id_group != 1 AND";
			if(!empty($id)){
				$sql.=" a.id_kategori=$id AND ";
			}
			$sql.=" judul LIKE '%$s%' order by tanggal DESC LIMIT $off,$lim";
			$b = $this->db->query($sql);
			$row = $b->result();
			$b->free_result();
			return $row;
		}
		
		function get_total_info_admin($s,$id=''){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori  WHERE id_group != 1 AND";
			if(!empty($id)){
				$sql.=" a.id_kategori=$id AND ";
			}
			$sql.=" judul LIKE '%$s%' order by tanggal DESC";
			$b = $this->db->query($sql);
			$row = $b->num_rows();
			$b->free_result();
			return $row;
		}			
		
		
		
		function detail_berita( $id){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori  WHERE slug_judul='$id'";
			$b = $this->db->query($sql);
			$row = $b->row();
			$b->free_result();
			return $row;
		}
		
		function detail_berita_admin( $id){
			$sql = "SELECT * FROM p_berita a left join user b on a.id_user = b.id_user left join p_kategori d on d.id_kategori = a.id_kategori  WHERE id_berita=$id ";
			$b = $this->db->query($sql);
			$row = $b->row();
			$b->free_result();
			return $row;
		}
				
		function format_uri( $string, $separator = '-' )
		{
			$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
			$special_cases = array( '&' => 'and');
			$string = mb_strtolower( trim( $string ), 'UTF-8' );
			$string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
			$string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
			$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
			$string = preg_replace("/[$separator]+/u", "$separator", $string);
			return $string;
		}
		
		function truncateHtml($text, $length = 100, $ending = '...', $exact = false, $considerHtml = true) {
			if ($considerHtml) {
			    $text = preg_replace("/<img[^>]+\>/i", "(image)", $text); 
				// if the plain text is shorter than the maximum length, return the whole text
				if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
					return $text;
				}
				// splits all html-tags to scanable lines
				preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
				$total_length = strlen($ending);
				$open_tags = array();
				$truncate = '';
				foreach ($lines as $line_matchings) {
					// if there is any html-tag in this line, handle it and add it (uncounted) to the output
					if (!empty($line_matchings[1])) {
						// if it's an "empty element" with or without xhtml-conform closing slash
						if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
							// do nothing
						// if tag is a closing tag
						} else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
							// delete tag from $open_tags list
							$pos = array_search($tag_matchings[1], $open_tags);
							if ($pos !== false) {
							unset($open_tags[$pos]);
							}
						// if tag is an opening tag
						} else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
							// add tag to the beginning of $open_tags list
							array_unshift($open_tags, strtolower($tag_matchings[1]));
						}
						// add html-tag to $truncate'd text
						$truncate .= $line_matchings[1];
					}
					// calculate the length of the plain text part of the line; handle entities as one character
					$content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
					if ($total_length+$content_length> $length) {
						// the number of characters which are left
						$left = $length - $total_length;
						$entities_length = 0;
						// search for html entities
						if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
							// calculate the real length of all entities in the legal range
							foreach ($entities[0] as $entity) {
								if ($entity[1]+1-$entities_length <= $left) {
									$left--;
									$entities_length += strlen($entity[0]);
								} else {
									// no more characters left
									break;
								}
							}
						}
						$truncate .= substr($line_matchings[2], 0, $left+$entities_length);
						// maximum lenght is reached, so get off the loop
						break;
					} else {
						$truncate .= $line_matchings[2];
						$total_length += $content_length;
					}
					// if the maximum length is reached, get off the loop
					if($total_length>= $length) {
						break;
					}
				}
			} else {
				if (strlen($text) <= $length) {
					return $text;
				} else {
					$truncate = substr($text, 0, $length - strlen($ending));
				}
			}
			// if the words shouldn't be cut in the middle...
			if (!$exact) {
				// ...search the last occurance of a space...
				$spacepos = strrpos($truncate, ' ');
				if (isset($spacepos)) {
					// ...and cut the text in this position
					$truncate = substr($truncate, 0, $spacepos);
				}
			}
			// add the defined ending to the text
			$truncate .= $ending;
			if($considerHtml) {
				// close all unclosed html-tags
				foreach ($open_tags as $tag) {
					$truncate .= '</' . $tag . '>';
				}
			}
			return $truncate;
		}
		
		function humanTiming ($time)
		{

			$time = time() - $time; // to get the time since that moment
			$time = ($time<1)? 1 : $time;
			$tokens = array (
				31536000 => 'tahun',
				2592000 => 'bulan',
				604800 => 'minggu',
				86400 => 'hari',
				3600 => 'jam',
				60 => 'menit',
				1 => 'detik'
			);

			foreach ($tokens as $unit => $text) {
				if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text;//.(($numberOfUnits>1)?'s':'');
			}

		}
	}	
	
	
/* End of file  */
/* Location: ./application/models/ */