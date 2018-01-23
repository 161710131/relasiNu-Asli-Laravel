<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\wali;
use App\Dosen;
use App\Hobi;
class mahasiswa extends Model
{
  
	# Tentukan nama tabel terkait
	protected $table = 'mahasiswa';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nim','id_dosen');

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' sebagai 'id_mahasiswa'
	 */
	public function wali() {
		return $this->hasOne('App\wali', 'id_mahasiswa');
	}
	public function Dosen(){
		return $this->belongsTo('App\Dosen', 'id_dosen');
	}
	public function hobi() {
		return $this->belongsToMany('App\Hobi', 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
	}

}
?>

