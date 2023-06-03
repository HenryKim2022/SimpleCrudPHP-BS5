CREATE DATABASE IF NOT EXISTS db_mobil;
USE db_mobil;
DROP TABLE IF EXISTS tb_katalog_mobil;
CREATE TABLE tb_katalog_mobil (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(24),
    merk VARCHAR(12),
    seri VARCHAR(12),
    tahun VARCHAR(4),
    b_bakar VARCHAR(35),
    harga VARCHAR(12),
    gambar TEXT(254)
);