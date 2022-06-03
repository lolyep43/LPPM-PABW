# PETAL-PABW

# Module
1. Login
2. Lupa Password
4. Tentang Kami
5. Anggota
6. Testimoni
7. Blog
8. FAQ
9. Contact Us
10. Logout



# Mengambil Seluruh Portofolio
Request:
  - Method : GET
  - Endpoint : /api/lihat-portofolios
  - Header : 
  
          Content-Type: application/json
          Authorization: JWT
          
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
          Authorization: JWT
          
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
          Authorization: JWT
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
  - Endpoint : /api/edit-portofolio/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
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

# Menghapus data Portofolio
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-portofolio/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          
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
          Authorization: JWT
          
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
          Authorization: JWT
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
          Authorization: JWT
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
  - Endpoint : /api/edit-anggota/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
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
          Authorization: JWT
          
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
          Authorization: JWT
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
  - Endpoint : /api/edit-blog/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
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
          Authorization: JWT
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }

# Mengambil Seluruh FAQ
Request:
  - Method : GET
  - Endpoint : /api/lihat-qnas
  - Header : 
  
          Content-Type: application/json
          Authorization: JWT
          
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
        
# Mengambil data FAQ
Request:
  - Method : GET
  - Endpoint : /api/lihat-qna/{id}
  - Header : 
  
          Content-Type: application/json
          Authorization: JWT
          
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
          
# Menambah data FAQ
Request:
  - Method : POST
  - Endpoint : /api/tambah-qna
  - Header :
  
          Content-Type: application/json
          Authorization: JWT
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

# Mengubah data FAQ
Request:
  - Method : PUT
  - Endpoint : /api/edit-qna/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
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
    
# Menghapus data FAQ
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-qna/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          
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
          Authorization: JWT
          
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
          Authorization: JWT
          
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
          Authorization: JWT
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
  - Endpoint : /api/edit-user/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
          
  - Body :
  
        {
          "name" : "string",
          "email" : "string",
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
    
# Menghapus data user
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-user/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
    
# Mengambil Seluruh Contact Us
Request:
  - Method : GET
  - Endpoint : /api/lihat-contact
  - Header : 
  
          Content-Type: application/json
          Authorization: JWT
          
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
                "nomor" : "string",
                "alamat" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
            
        }
# Mengubah data Contact Us
Request:
  - Method : PUT
  - Endpoint : /api/edit-contact/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
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
                "nomor" : "string",
                "jalan" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp",
              }
    }
        

    
# Lupa Password
Request:
  - Method : POST
  - Endpoint : /api/lupa-passowrd
  - Header :
    
          Content-Type: application/json
          Accept: application/json
        
   - Body:
   
        {
          "email" : "string",
        }
        
   - Response
        
        {
          status : "string",
          massage : "string"
        }
          
# Melalukan Login
Request:
  - Method : POST
  - Endpoint : /api/login
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "email" : "string",
          "password" : "string"
        }
        
   - Respone:
   
    {
        status : "string"
        user : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
         authorisation : {
                "token" : "string",
                "type" : "string
              }
    }

# Logout
Request:
  - Method : POST
  - Endpoint : /api/logout
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
        
   - Respone:
   
    {
        status : "string",
        massage : "string"
       
    }
    
# Refresh jwt
Request:
  - Method : POST
  - Endpoint : /api/refresh
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
        
   - Respone:
   
    {
        status : "string"
        user : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
         authorisation : {
                "token" : "string",
                "type" : "string
              }
       
    }

       
    
