# Laravel API Customer Invoices

## Tentang Proyek

Proyek ini dibuat untuk membantu kalian dalam belajar penggunaan RestAPI _**(Creating RestAPI or Consume API)**_. Terlepas itu pula proyek ini juga bisa kalian kembangkan untuk pengembangan yang lebih lanjut lagi.

## Endpoints
- **End Point Utama**       : http://laravel-api.test/api/v1/
- **Resource Customers**    : http://laravel-api.test/api/v1/customers
- **Resource Customer**    : http://laravel-api.test/api/v1/customers/1
- **Resource Customers Params**    : http://laravel-api.test/api/v1/customers?postalCode[lt]=50000
- **Resource Invoices**     : http://laravel-api.test/api/v1/invoices
- **Resource Invoice**     : http://laravel-api.test/api/v1/invoices/1
- **Resource Invoices Params**     : http://laravel-api.test/api/v1/invoices?status[ne]=B
- **Resource Customers include Invoices Params** : http://laravel-api.test/api/v1/customers?1&includeInvoices=true
- **Resource Customer include Invoices** : http://laravel-api.test/api/v1/customers/1?postalCode[lte]=50000&includeInvoices=true

## Params
- **eq** : Sama Dengan
- **lt** : Kurang Dari
- **gt** : Lebih Dari
- **lte** : Kurang Dari Sama Dengan
- **gte** : Lebih Dari Sama Dengan
- **ne** : Kurang Dari

### Get Data

Mengambil data tertentu dari server.

- **URL:** `/api/v1/{id}`
- **Metode:** GET
- **Paramter:** 
  - `id` (int) - ID data yang diinginkan.

#### Contoh Permintaan

```
http
GET /api/v1/customers
```

#### Contoh Respons

```
json
{
    "data": {
        "id": 1,
        "name": "Crona-Roberts",
        "type": "B",
        "email": "pmurazik@ruecker.com",
        "address": "8880 Arielle Prairie",
        "city": "North Austen",
        "state": "Minnesota",
        "postalCode": "09676-3256"
    }
}
```

### Menambahkan Data Baru

Menambahkan data baru ke server.

- **URL:** `/api/v1/customers`
- **Metode:** POST
- **Body:**
```
json
{
    "name": "Crona-Roberts",
    "type": "B",
    "email": "pmurazik@gmail.com",
    "address": "8880 Arielle Prairie",
    "city": "North Austen",
    "state": "Minnesota",
    "postalCode": "09676-3256"
}
```

#### Contoh Permintaan

```
http
POST /api/v1/customers
Content-Type: application/json
Accept: application/json

json
{
    "name": "Crona-Roberts",
    "type": "B",
    etc...
}
```

#### Contoh Respons

```
json
{
    "data": {
        "id": 233,
        "name": "Crona-Roberts",
        "type": "B",
        "email": "pmurazik@gmail.com",
        "address": "8880 Arielle Prairie",
        "city": "North Austen",
        "state": "Minnesota",
        "postalCode": "09676-3256"
    }
}
```

### Mengubah Data Baru

Mengubah data baru ke server.

- **URL:** `/api/v1/customers/{id}`
- **Metode:** PUT
- **Body:**
```
json
{
    "name": "Crona-Roberts update",
    "type": "B",
    "email": "pmurazik@gmail.com",
    etc...
}
```

#### Contoh Permintaan

```
http
POST /api/v1/customers/{id}
Content-Type: application/json
Accept: application/json

json
{
    "name": "Crona-Roberts update",
    "type": "B",
    etc...
}
```

#### Contoh Respons

```
json
{
    "data": {
        "id": 1,
        "name": "Crona-Roberts update",
        "type": "B",
        "email": "pmurazik@gmail.com",
        etc...
    }
}
```

## Kontribusi

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://id.linkedin.com/in/bimanyu-nugroho-firmansyah) 

## Lisensi

**DEVABI - 2023**
