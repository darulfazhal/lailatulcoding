create table event(
	id_event int(5) primary key auto_increment,
	nama_penyelenggara varchar(150),
	email varchar(100),
	telpon varchar(15),
	alamat varchar(255),
	kota varchar(50),
	jml_peserta int(5),
	tahun int(5),
	tgl_pengajuan date, 
	status varchar(15)
);

create table peserta(
	id_peserta int(10) primary key auto_increment,
	nama_peserta varchar(150),
	email varchar(100),
	telpon varchar(15),
	skill varchar(255)
);