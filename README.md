# LPPM-PABW

# Module
1. Login

2. Beranda
    

2. Tentang Kami
   
3.Testimoni

4.Blog

5. FAQ













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
 
