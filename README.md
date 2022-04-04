# LPPM-PABW

# Module
1. Login
2. Beranda
3. Tentang Kami
4. Anggota
5. Testimoni
6. Blog
7. FAQ
8. Logout



# Mengambil Seluruh Portofolio
Request:
  - Method : GET
  - Endpoint : /api/lihat-portofolio
  - Header : 
  
          Content-Type: application/json
          
  - Query Params :
  
          size : number,
          page : number
            
  - Respone:
    
        {
            "code" : "number",
            "status" : "string",
            "data" : [
              {
                "id" : "bigint, primary, auto-increment",
                "jenis" : "string",
                "judul" : "string",
                "probblem" : "long",
                "solusi" : "text",
                "fitur" : "text",
                "metode" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
                "slug"  : "string"
              },
              {
                "id" : "bigint, primary, auto-increment",
                "jenis" : "string",
                "judul" : "string",
                "probblem" : "long",
                "solusi" : "text",
                "fitur" : "text",
                "metode" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
                "slug"  : "string"
              }
            
        }
# Mengambil data Portofolio
Request:
  - Method : GET
  - Endpoint : /api/lihat-portofolio
  - Header : 
  
          Content-Type: application/json
  - Respone :
  
         {
            "code" : "number",
            "status" : "string",
            
             {
                "id" : "bigint, primary, auto-increment",
                "jenis" : "string",
                "judul" : "string",
                "probblem" : "long",
                "solusi" : "text",
                "fitur" : "text",
                "metode" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
                "slug"  : "string"
             }
         
         }
          
# Menambah data Portofolio
Request:
  - Method : POST
  - Endpoint : /api/tambah-portofolio
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
            "jenis" : "string",
            "judul" : "string",
            "probblem" : "long",
            "solusi" : "text",
            "fitur" : "text",
            "metode" : "string",
            "tahun" : "string",
            "foto" : "string",
            "created_at" : "timestamp",
            "updated_at" : "timestamp",
            "slug"  : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "jenis" : "string",
                "judul" : "string",
                "probblem" : "long",
                "solusi" : "text",
                "fitur" : "text",
                "metode" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
                "slug"  : "string"
              }
    }

# Mengubah data Portofolio
Request:
  - Method : PUT
  - Endpoint : /api/ubah-portofolio/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
            "id" : "bingint, primary"
            "jenis" : "string",
            "judul" : "string",
            "probblem" : "long",
            "solusi" : "text",
            "fitur" : "text",
            "metode" : "string",
            "tahun" : "string",
            "foto" : "string",
            "created_at" : "timestamp",
            "updated_at" : "timestamp",
            "slug"  : "string"
        }
   - Respone:
   
    {
        code : "number"
        status : "string"
        data: {
                "id" : "bigint, primary",
                "jenis" : "string",
                "judul" : "string",
                "probblem" : "long",
                "solusi" : "text",
                "fitur" : "text",
                "metode" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
                "slug"  : "string"
            }
    }

# Menghapus data Portofolio
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-portofolio/{id}
  - Header :
    
          Content-Type: application/json
          
  - Body :
  
        {
            "id" : "bigint, primary",
        }
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
 
