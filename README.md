
# The logistik

aplikasi sederhana untuk mencatat kebutuhan logistik.
fitur utamanya adalah mencatat keluar dan masuk barang logistik anda, dengan
tampilan nyaman, komplektivitas sistem tidak mempengaruhi kenyamanan anda.

Ada contoh untuk barang bisa cek dibawah :


## Peta directory

frontend

```bash
  view/components/pages/*
```

```bash
  view/components/layouts/app.blade.php // main dir dont change!
```
```bash
  view/components/layouts/auth.blade.php
```

```bash
  view/components/components/header.blade.php
```
```bash
  view/components/components/sidebar.blade.php
```
```bash
  view/components/components/delete-modal.blade.php
```

## backend

backend controllers

```bash
  app/http/controllers
```

backend route

```bash
  route/web.php
```

Custom js for modal, segala proses hapus data di hanndle langsung menggunakan laravel, javascript hanya untuk menaruh coockie modal.

```bash
    public/page/custom.js
```


## Table Untuk Demo Barang

| **Nama Produk**   | **Kode Barang** | **Quantity** | **Origin**    |
|--------------------|-----------------|--------------|---------------|
| Semen             | tb01            | 200          | Indonesia     |
| Pasir             | tb02            | 200          | Indonesia     |
| Batu Bata         | tb03            | 200          | Indonesia     |
| Kayu              | tb04            | 200          | Indonesia     |
| Kabel Listrik     | tb05            | 200          | Indonesia     |
| Saklar            | tb06            | 200          | Indonesia     |
| Lampu             | tb07            | 200          | Indonesia     |
| Cat               | tb08            | 200          | Indonesia     |
| Pipa PVC          | tb09            | 200          | Indonesia     |
| Lem               | tb10            | 200          | Indonesia     |
| Granit            | ta01            | 200          | Belanda       |
| Baja Tulangan     | ta02            | 200          | Jepang        |
| AAC               | ta03            | 200          | Jepang        |






## Screenshots

input barang masuk, no barang masuk dibuat secara random.

![App Screenshot](https://ucarecdn.com/d0f68d0f-7612-4da6-8f6a-01839647f66e/input.png)

jika input berhasil, akan ada alert success

![App Screenshot](https://ucarecdn.com/6dc7d10d-85e0-42e0-951f-290f25155df1/inputberhasil.png)


ga sengaja tekan tombol 'hapus' tenang ada konfirmasi terlebih dahulu kok!
kesal karena setiap ingin hapus harus pencet konfirmasi? kamu juga bisa disable untuk 1 hari!

![App Screenshot](https://ucarecdn.com/b3566634-2b9f-4765-af6e-567c1c7b23b8/deletewtihmodalandcoockie.png)



jika barang tidak ada di "gudang" kamu tidak akan bisa "mengeluarkan" barang tersebut.

![App Screenshot](https://ucarecdn.com/4684fbaa-08bf-42be-a703-d60d84a82b5f/errorketikakodebarangtidakditemukan.png)



stock barang di gudang hanya ada 200, kamu mencatat pengeluaran 201. kurang 1 tidak boleh!

![App Screenshot](https://ucarecdn.com/3ff7cc44-7ba4-407f-ab1e-f0950355bac5/stockbarangkurang.png)




filter sesuai dengan negara! 
![App Screenshot](https://ucarecdn.com/ea0b64f6-3fa8-4d21-b9ce-d67f63fcabbd/filterall.png)

filter menampilkan data

![App Screenshot](https://ucarecdn.com/c23a1459-6484-4447-a3e4-f0c1f401ed8f/filteradadata.png)



filter gagal menampilkan data

![App Screenshot](https://ucarecdn.com/676d9a91-b131-46c9-b28a-af7be437aa12/tidakadadata.png)




cari stock berdasarkan kode barang atau origin

![App Screenshot](https://ucarecdn.com/00e21678-ab2d-49cf-858a-599f5b8bbe4e/caristock.png)


yeayy ada datanya

![App Screenshot](https://ucarecdn.com/16f8bab8-702b-4cc0-8520-b50309822093/hasilcaristock.png)


yahh datanya ga ada nih

![App Screenshot](https://ucarecdn.com/08d79e30-6cfd-477a-9e44-8a0943c90cf5/gagalcaristock.png)


data stock di hapus menggunakan password

![App Screenshot](https://ucarecdn.com/67c52927-65ae-4b4d-abf3-296c342e8396/20241221001750.gif)



login, login, login!

![App Screenshot](https://ucarecdn.com/7df8be80-6447-44e6-a5df-fa47cdbfb0ac/login.png)


