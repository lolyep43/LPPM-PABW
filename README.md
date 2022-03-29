# LPPM-PABW

# Module
1. Login

2. Luaran 
    1. Hasil Penelitian 
    2. Hasil Pengabdian 
    3. Buku Ajar 
    4. Publikasi Ilmiah

2. Inovasi
    1. Inovasi Mandiri 
    2. Inovasi dengan Industri

4.Dokumen

5.Galeri













# Melihat Hasil Penelitian
Request:
  - Method : GET
  - Endpoint : /api/list-hasil-penelitian
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Hasil Penelitian
Request:
  - Method : POST
  - Endpoint : /api/tambah-hasil-penelitian
  - Header :
  - Body :
  
        {
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
              }
    }

# Mengubah data Hasil Penelitian
Request:
  - Method : PUT
  - Endpoint : /api/ubah-hasil-penelitian/{id}
  - Header :
  - Body :
  
        {
            "id" : "bingint, primary"
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Hasil Penelitian
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-hasil-penelitian/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }
 
# Melihat Hasil Pengabdian
Request:
  - Method : GET
  - Endpoint : /api/list-hasil-pengabdian
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Hasil Pengabdian
Request:
  - Method : POST
  - Endpoint : /api/tambah-hasil-pengabdian
  - Header :
  - Body :
  
        {
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
              }
    }

# Mengubah data Hasil Pengabdian
Request:
  - Method : PUT
  - Endpoint : /api/ubah-hasil-pengabdian/{id}
  - Header :
  - Body :
  
        {
            "id" : "bingint, primary"
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Hasil Pengabdian
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-hasil-pengabdian/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }

# Melihat Buku Ajar
Request:
  - Method : GET
  - Endpoint : /api/list-buku-ajar
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "pengarang" : "string",
            "judul" : "string",
            "deskripsi" : "long",
            "penerbit" : "text",
            "gambar" : "text",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Buku Ajar
Request:
  - Method : POST
  - Endpoint : /api/tambah-buku-ajar
  - Header :
  - Body :
  
        {
            "pengarang" : "string",
            "judul" : "string",
            "deskripsi" : "text",
            "penerbit" : "string",
            "gambar" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "pengarang" : "string",
                "judul" : "string",
                "deskripsi" : "text",
                "penerbit" : "string",
                "gambar" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
              }
    }

# Mengubah data Buku Ajar
Request:
  - Method : PUT
  - Endpoint : /api/ubah-buku-ajar/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
            "pengarang" : "string",
            "judul" : "string",
            "deskripsi" : "text",
            "penerbit" : "string",
            "gambar" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary, auto-increment",
                "pengarang" : "string",
                "judul" : "string",
                "deskripsi" : "text",
                "penerbit" : "string",
                "gambar" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Buku Ajar
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-buku-ajar/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }

# Melihat Publikasi Ilmiah
Request:
  - Method : GET
  - Endpoint : /api/list-publikasi-ilmiah
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Publikasi Ilmiah
Request:
  - Method : POST
  - Endpoint : /api/tambah-publikasi-ilmiah
  - Header :
  - Body :
  
        {
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
               "id" : "bigint, primary, auto-increment",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
              }
    }

# Mengubah data Publikasi Ilmiah
Request:
  - Method : PUT
  - Endpoint : /api/ubah-publikasi-ilmiah/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
            "peneliti" : "string",
            "judul" : "string",
            "fokus_riset" : "long",
            "deskripsi" : "text",
            "manfaat" : "text",
            "foto" : "string",
            "tahun" : "string"
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary, auto-increment",
                "peneliti" : "string",
                "judul" : "string",
                "fokus_riset" : "long",
                "deskripsi" : "text",
                "manfaat" : "text",
                "foto" : "string",
                "tahun" : "string"
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Publikasi Ilmiah
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-publikasi-ilmiah/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }

# Melihat Inovasi Mandiri
Request:
  - Method : GET
  - Endpoint : /api/list-inovasi-mandiri
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "judul" : "string",
            "konten" : "string",
            "gambar" : "long",
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Inovasi Mandiri
Request:
  - Method : POST
  - Endpoint : /api/tambah-inovasi-mandiri
  - Header :
  - Body :
  
        {
             "judul" : "string",
             "konten" : "string",
             "gambar" : "long",
             "created_at" : "timestamp",
             "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
               "id" : "bigint, primary, auto-increment",
               "judul" : "string",
               "konten" : "string",
               "gambar" : "long",
               "created_at" : "timestamp",
               "updated_at" : "timestamp"
              }
    }

# Mengubah data Inovasi Mandiri
Request:
  - Method : PUT
  - Endpoint : /api/ubah-inovasi-mandiri/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
            "judul" : "string",
            "konten" : "string",
            "gambar" : "long",
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "konten" : "string",
                "gambar" : "long",
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Inovasi Mandiri
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-inovasi-mandiri/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }
# Menghapus data Inovasi Mandiri
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-inovasi-mandiri/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }

# Melihat Inovasi dengan Industri
Request:
  - Method : GET
  - Endpoint : /api/list-inovasi-industri
  - Header :
  - Body :
  - Respone:
    
      
        {
            "id" : "bigint, primary, auto-increment",
            "judul" : "string",
            "konten" : "string",
            "gambar" : "long",
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }

# Menambah data Inovasi dengan Industri
Request:
  - Method : POST
  - Endpoint : /api/tambah-inovasi-industri
  - Header :
  - Body :
  
        {
             "judul" : "string",
             "konten" : "string",
             "gambar" : "long",
             "created_at" : "timestamp",
             "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
               "id" : "bigint, primary, auto-increment",
               "judul" : "string",
               "konten" : "string",
               "gambar" : "long",
               "created_at" : "timestamp",
               "updated_at" : "timestamp"
              }
    }

# Mengubah data Inovasi dengan Industri
Request:
  - Method : PUT
  - Endpoint : /api/ubah-inovasi-industri/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
            "judul" : "string",
            "konten" : "string",
            "gambar" : "long",
            "created_at" : "timestamp",
            "updated_at" : "timestamp"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "konten" : "string",
                "gambar" : "long",
                "created_at" : "timestamp",
                "updated_at" : "timestamp"
            }
    }

# Menghapus data Inovasi dengan Industri
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-inovasi-industri/{id}
  - Header :
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
    }
        

    
