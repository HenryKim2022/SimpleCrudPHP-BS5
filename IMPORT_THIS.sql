CREATE DATABASE IF NOT EXISTS mahasiswa;
DROP TABLE IF EXISTS tbl_mahasiswa;
CREATE TABLE tbl_mahasiswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_mhs VARCHAR(24),
    nrp VARCHAR(12),
    alamat VARCHAR(35)
);