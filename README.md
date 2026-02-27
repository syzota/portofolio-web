# **Mini Project: Personal Portfolio - To the Passengers ✮**
<img width="2000" height="500" alt="gitov" src="https://github.com/user-attachments/assets/1907c049-1bea-46ac-bf23-4876a7e7cc25" />
A repository made for the Website-Based Programming for course in practicum. **Was made by Putri Syafana Afrillia (NIM: 2409116015).**

## **Introduction** ★

Mini Project ini merupakan dokumentasi hasil pembuatan website sederhana **Portofolio** berbasis **HTML dan CSS**, menggunakan _VUE JS dan Bootstrap_.

---

## **Portofolio Hands-On** ⸝⸝.ᐟ⋆.ᐟ
### Features Checklist ᯓ★

- [x] Section Home (Hero Section)
- [x] Section About Me / Skillset (Deskripsi & Pengalaman)
- [x] Section Certificates (Grid Layout)
- [x] Progress Bar untuk Skillset
- [x] Navigate Bar dan Gambar 
- [x] Integrasi Vue JS dan Bootstrap
- [x] Penggunaan struktur dasar HTML dan CSS untuk styling
- [x] Rapi, responsif dan statis.

# **Project Documentations** ⋆˚࿔.ᐟ

## Library Structure ⊹ ࣪ ˖ ✔

Below is the structure of the **_library_ folder** which contains the main codes that are executed.

```

├── assets/              # Assets gambar, icon, dan background
│   ├── icons/           # Kumpulan icon
│   └── ...              # Foto sertifikat dan dekorasi
├── index.html           # File utama (Struktur & Vue Instance)
└── style.css            # Custom styling 

```

## **Main Scores** ୭ ˚. ᵎᵎ .ᐟ



### Home & Hero ⍟

Bagian ini menampilkan halaman utama dengan menggunakan `Bootstrap Container` untuk menjaga konten tetap di tengah. Di sini banyak gambar dekoratif yang ditambahkan yang tujuannya agar website tidak terkesan membosankan. Banyak pula class yang diambil dari CSS yang mengatur supaya tombol teks dan gambar sesuai dengan format yang diinginkan juga konsisten.

``` html
        <section id="home" class="hero-section">
            <img src="assets/file.png" class="full-image hero-decor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-name">Putri S. Afrillia</h1>
                        <h2 class="hero-role">Designer & Developer ✮ </h2>
                        <p class="mt-3 hero-desc">Doing my breath out of Information System Major.</p>
                        <div class="mt-4">
                            <a href="#about" class="btn pill me-3 px-4">Get to know.</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center position-relative mt-5 mt-lg-0">
                        <img src="assets/postcard.png" class="full-image">
                    </div>
                </div>
            </div>
            <img src="assets/skill.png" class="full-image hero-decor">
        </section>
```
### Show Cart Items with Quantity .✦ ݁˖

Fitur ini menampilkan seluruh produk yang telah ditambahkan ke keranjang beserta jumlah (quantity)-nya. Implementasi berada pada cart_page.dart, dengan memanfaatkan Consumer<CartModel> untuk membaca daftar item.

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/cdc3d369-b966-408e-bb4f-32233e10627c" />

``` dart
Consumer<CartModel>(
  builder: (context, cart, child) {
    return ListView(
      children: cart.itemsList.map(
        (item) => ListTile(
          title: Text(item.product.name),
          subtitle: Text('Qty: ${item.quantity}'),
          trailing: Text(
            'Rp ${item.totalPrice.toStringAsFixed(0)}',
          ),
        ),
      ).toList(),
    );
  },
)
```
### Update Quantity (+/-) .✦ ݁˖

Fitur ini memungkinkan pengguna menambah atau mengurangi jumlah produk dalam keranjang. Implementasi dilakukan pada cart_page.dart, yang memanggil method increaseQuantity() dan decreaseQuantity() di dalam cart_model.dart.

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/9b205029-1c21-48b9-abab-957fd0c2317f" />

``` dart
IconButton(
  icon: const Icon(Icons.add),
  onPressed: () {
    context.read<CartModel>().increaseQuantity(item.product);
  },
),

IconButton(
  icon: const Icon(Icons.remove),
  onPressed: () {
    context.read<CartModel>().decreaseQuantity(item.product);
  },
),
```

Method di cart_model.dart:

``` dart
void increaseQuantity(Product product) {
  final item =
      _items.firstWhere((item) => item.product.id == product.id);
  item.quantity++;
  notifyListeners();
}

void decreaseQuantity(Product product) {
  final index =
      _items.indexWhere((item) => item.product.id == product.id);

  if (_items[index].quantity > 1) {
    _items[index].quantity--;
  } else {
    _items.removeAt(index);
  }

  notifyListeners();
}
```

### Remove Items from Cart .✦ ݁˖

Fitur ini memungkinkan pengguna menghapus produk secara langsung dari keranjang. Implementasi dilakukan melalui method removeItem() pada cart_model.dart.

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/97384040-71d5-4bf6-95da-d4c05684d7a7" />

``` dart
void removeItem(Product product) {
  _items.removeWhere((item) => item.product.id == product.id);
  notifyListeners();
}
```

Pemanggilan di cart_page.dart:

``` dart
IconButton(
  icon: const Icon(Icons.delete),
  onPressed: () {
    context.read<CartModel>().removeItem(item.product);
  },
),
```

### Display Total Price Correctly .✦ ݁˖

Fitur ini menghitung dan menampilkan total harga seluruh item dalam keranjang. Perhitungan dilakukan pada cart_model.dart menggunakan getter totalPrice

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/80b8a4d2-d7cb-4e13-9721-21b441e7343b" />

``` dart
double get totalPrice {
  return _items.fold(
    0,
    (sum, item) => sum + item.totalPrice,
  );
}
}
```

Pemanggilan di halaman cart atau checkout:

``` dart
Text(
  'Total: Rp ${cart.totalPrice.toStringAsFixed(0)}',
)
```
## **Bonus Scores ゛⸝⸝.ᐟ⋆

### Search / Filter .✦ ݁˖

Fitur ini memungkinkan pengguna mencari produk berdasarkan nama. Implementasi dilakukan pada product_list_page.dart dengan memanfaatkan TextField untuk menangkap input pencarian dan melakukan filtering pada daftar produk menggunakan method where().

<img width="922" height="1124" alt="image" src="https://github.com/user-attachments/assets/91ba83ec-d2e5-4e65-a1c4-274c6a0f80cf" />

``` dart
TextField(
  decoration: const InputDecoration(
    hintText: 'Search product...',
    prefixIcon: Icon(Icons.search),
  ),
  onChanged: (value) {
    setState(() {
      searchQuery = value;
    });
  },
),
```

Berikut logika filtering-nya.

``` dart
final filteredProducts = products.where((product) {
  final matchesSearch =
      product.name.toLowerCase().contains(searchQuery.toLowerCase());
  return matchesSearch;
}).toList();
```
Fungsi where() menyaring daftar produk berdasarkan kecocokan nama dengan input pengguna. Ketika setState() dipanggil, tampilan akan diperbarui secara otomatis.

### Categories .✦ ݁˖

Fitur ini memungkinkan pengguna memfilter produk berdasarkan kategori tertentu. Implementasi dilakukan menggunakan DropdownButton pada product_list_page.dart, yang akan memperbarui variabel kategori aktif dan memfilter produk sesuai kategori tersebut.

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/16065a70-9d6c-4053-ac74-6184d0a90869" />

``` dart
TextField(
  decoration: const InputDecoration(
    hintText: 'Search product...',
    prefixIcon: Icon(Icons.search),
  ),
  onChanged: (value) {
    setState(() {
      searchQuery = value;
    });
  },
),
```

Berikut logika filtering-nya.

``` dart
final filteredProducts = products.where((product) {
  final matchesSearch =
      product.name.toLowerCase().contains(searchQuery.toLowerCase());
  return matchesSearch;
}).toList();
```

### Checkout Page .✦ ݁˖

Halaman ini memanfaatkan data dari CartModel untuk memastikan total harga dan item tetap sinkron dengan state aplikasi. Fitur ini menyediakan halaman ringkasan pesanan dan formulir sederhana untuk proses checkout. Implementasi berada pada checkout_page.dart, yang menampilkan daftar item, total harga, serta form input data pengguna. Berikut navigasi ke halaman checkout:

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/6a9881d9-1228-48f6-9caa-be9cca88e5cc" />

``` dart
ElevatedButton(
  onPressed: () {
    Navigator.push(
      context,
      MaterialPageRoute(
        builder: (context) => const CheckoutPage(),
      ),
    );
  },
  child: const Text('Checkout'),
)
```

Berikut untuk menampilkan ringkasan pesanannya.

``` dart
Text(
  'Total: Rp ${cart.totalPrice.toStringAsFixed(0)}',
)
```
Dan form input simpel untuk nama pelanggan.

``` dart
TextField(
  decoration: const InputDecoration(
    labelText: 'Full Name',
  ),
),
```

Berikut tampilan ketika sudah menetapkan orderan.

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/6d0d898f-039c-4955-a954-077cf71334d4" />




