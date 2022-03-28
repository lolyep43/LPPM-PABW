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
        

# Menambah data Hasil Penelitian
Request:
  - Method : GET
  - Endpoint : /api/tambah-hasil-penelitian
  - Header :
  - Body :
  
    
        "id" : "bigint, primary",
        "peneliti" : "string",
        "judul" : "string",
        "fokus_riset" : "long",
        "deskripsi" : "text",
        "manfaat" : "text",
        "foto" : "string",
        "tahun" : "string"
   - Respone:

    code : "number"
    status : "string"
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
        
        

    
