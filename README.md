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
  - Endpoint : /api/lihat-portofolios
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
                "problem" : "string",
                "solusi" : "string",
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
                "problem" : "string",
                "solusi" : "string",
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
  - Endpoint : /api/lihat-portofolio/{id}
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
                "problem" : "string",
                "solusi" : "string",
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
          "problem" : "string",
          "solusi" : "string",
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
                     "problem" : "string",
                     "solusi" : "string",
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
            "jenis" : "string",
            "judul" : "string",
            "problem" : "string",
            "solusi" : "string",
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
                "id" : "bigint, primary, auto-increment",
                "jenis" : "string",
                "judul" : "string",
                "problem" : "string",
                "solusi" : "string",
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
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
    
# Mengambil Seluruh Anggota
Request:
  - Method : GET
  - Endpoint : /api/lihat-anggotas
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
                "level" : "string",
                "jabatan" : "string",
                "nama" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
            
              },
              {
                "id" : "bigint, primary, auto-increment",
                "level" : "string",
                "jabatan" : "string",
                "nama" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
            
        }
        

# Mengambil data Anggota
Request:
  - Method : GET
  - Endpoint : /api/lihat-anggota/{id}
  - Header : 
  
          Content-Type: application/json
  - Respone :
  
         {
            "code" : "number",
            "status" : "string",
            
             {
                "id" : "bigint, primary, auto-increment",
                "level" : "string",
                "jabatan" : "string",
                "nama" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
             }
         
         }
          
# Menambah data Anggota
Request:
  - Method : POST
  - Endpoint : /api/tambah-anggota
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "level" : "string",
          "jabatan" : "string",
          "nama" : "string",
          "foto" : "string",
          "created_at" : "timestamp",
          "updated_at" : "timestamp",
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "level" : "string",
                "jabatan" : "string",
                "nama" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }

# Mengubah data Anggota
Request:
  - Method : PUT
  - Endpoint : /api/ubah-anggota/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
            "level" : "string",
            "jabatan" : "string",
            "nama" : "string",
            "foto" : "string",
            "created_at" : "timestamp",
            "updated_at" : "timestamp",
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "level" : "string",
                "jabatan" : "string",
                "nama" : "long",
                "foto" : "text",
                "created_at" : "text",
                "deleted_at" : "string",
                "tahun" : "string",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }
    
# Menghapus data Anggota
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-anggota/{id}
  - Header :
    
          Content-Type: application/json
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
    
# Mengambil Seluruh Blog
Request:
  - Method : GET
  - Endpoint : /api/lihat-blogs
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
                "judul" : "string",
                "deskripsi" : "text",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              },
              {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "deskripsi" : "text",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
            
        }
        
# Mengambil data blog
Request:
  - Method : GET
  - Endpoint : /api/lihat-blog/{id}
  - Header : 
  
          Content-Type: application/json
  - Respone :
  
         {
            "code" : "number",
            "status" : "string",
         
             {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "deskripsi" : "text",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
             }
         
         }
          
# Menambah data blog
Request:
  - Method : POST
  - Endpoint : /api/tambah-blog
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "judul" : "string",
          "deskripsi" : "text",
          "foto" : "string",
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "deskripsi" : "text",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }

# Mengubah data blog
Request:
  - Method : PUT
  - Endpoint : /api/ubah-blog/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
           "judul" : "string",
           "deskripsi" : "text",
           "foto" : "string",
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "judul" : "string",
                "deskripsi" : "text",
                "foto" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }
    
# Menghapus data blog
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-blog/{id}
  - Header :
    
          Content-Type: application/json
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }

# Mengambil Seluruh QNA
Request:
  - Method : GET
  - Endpoint : /api/lihat-qnas
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
                "pertanyaan" : "string",
                "jawaban" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              },
              {
                "id" : "bigint, primary, auto-increment",
                "pertanyaan" : "string",
                "jawaban" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
            
        }
        
# Mengambil data QNA
Request:
  - Method : GET
  - Endpoint : /api/lihat-qna/{id}
  - Header : 
  
          Content-Type: application/json
          
  - Respone :
  
         {
            "code" : "number",
            "status" : "string",
         
             {
                "id" : "bigint, primary, auto-increment",
                "pertanyaan" : "string",
                "jawaban" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
             }
         
         }
          
# Menambah data QNA
Request:
  - Method : POST
  - Endpoint : /api/tambah-qna
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {

          "pertanyaan" : "string",
          "jawaban" : "string",

        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "pertanyaan" : "string",
                "jawaban" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }

# Mengubah data blog
Request:
  - Method : PUT
  - Endpoint : /api/ubah-qna/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "pertanyaan" : "string",
          "jawaban" : "string",
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "pertanyaan" : "string",
                "jawaban" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }
    
# Menghapus data QNA
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-qna/{id}
  - Header :
    
          Content-Type: application/json
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }

# Mengambil Seluruh user
Request:
  - Method : GET
  - Endpoint : /api/lihat-users
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
                "name" : "string",
                "email" : "string",
                "role" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              },
              {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "role" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
            
        }
        
# Mengambil data user
Request:
  - Method : GET
  - Endpoint : /api/lihat-user/{id}
  - Header : 
  
          Content-Type: application/json
          
  - Respone :
  
         {
            "code" : "number",
            "status" : "string",
         
             {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "role" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
             }
         
         }
          
# Menambah data user
Request:
  - Method : POST
  - Endpoint : /api/tambah-user
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "name" : "string",
          "email" : "string",
          "role" : "string",
          "password" : "string"
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "role" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
    }

# Mengubah data user
Request:
  - Method : PUT
  - Endpoint : /api/ubah-user/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "name" : "string",
          "email" : "string",
          "role" : "string",
          "password" : "string"
        }
        
   - Respone:
   
    {
        code : "number"
        status : "string"
        data : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "role" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
    }
    
# Menghapus data QNA
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-user/{id}
  - Header :
    
          Content-Type: application/json
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
