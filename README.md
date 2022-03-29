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
  - Endpoint : /api/tambah-hasil-penelitian/{id}
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
  - Endpoint : /api/tambah-hasil-pengabdian/{id}
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

# Menambah data Buku Ajar
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

# Mengubah data Buku Ajar
Request:
  - Method : PUT
  - Endpoint : /api/tambah-hasil-pengabdian/{id}
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

# Menghapus data Buku Ajar
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
        
        

    
