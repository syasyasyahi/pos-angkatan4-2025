<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teras Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/syahi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid container-pos">
        <div class="row h-100">
            <div class="col-md-7 product-section">
                <div class="mb-4">
                    <h4 class="mb-3">
                        <i class="fas fa-store"></i>
                        Product
                    </h4>
                    <input type="text" ide="searchProduct" class="form-control search-box"
                        placeholder="Find Product...">
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary category-btn active">All Menu</button>
                    <button class="btn btn-outline-primary category-btn">Main Course</button>
                    <button class="btn btn-outline category-btn active">Drink</button>
                    <button class="btn btn-outline category-btn active">Dessert</button>
                </div>
                <div class="row" id="productGrid">
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/gadogado.jpeg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Main Course</span>
                                <h6 class="card-title mt-2 mb-2">Gado-gado</h6>
                                <p class="card-text text-primary fw-bold">Rp.22.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/bakso.jpg" alt="" height="130%" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Main Course</span>
                                <h6 class="card-title mt-2 mb-2">Bakso</h6>
                                <p class="card-text text-primary fw-bold">Rp.25.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/tengkleng.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Main Course</span>
                                <h6 class="card-title mt-2 mb-2">Tengkleng Gajah</h6>
                                <p class="card-text text-primary fw-bold">Rp.40.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/selendangmayang.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Dessert</span>
                                <h6 class="card-title mt-2 mb-2">Es Selendang Mayang</h6>
                                <p class="card-text text-primary fw-bold">Rp.15.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/esbuah.jpeg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Dessert</span>
                                <h6 class="card-title mt-2 mb-2">Sop Buah</h6>
                                <p class="card-text text-primary fw-bold">Rp.15.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/1761105011-kopiluwak.webp" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Drink</span>
                                <h6 class="card-title mt-2 mb-2">Luwak Coffee</h6>
                                <p class="card-text text-primary fw-bold">Rp.200.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/talam.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Dessert</span>
                                <h6 class="card-title mt-2 mb-2">Talam cake</h6>
                                <p class="card-text text-primary fw-bold">Rp.25.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/sotobetawi.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Main Course</span>
                                <h6 class="card-title mt-2 mb-2">Soto Betawi</h6>
                                <p class="card-text text-primary fw-bold">Rp.35.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/1761105011-kopiluwak.webp" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Drink</span>
                                <h6 class="card-title mt-2 mb-2">Luwak Coffee</h6>
                                <p class="card-text text-primary fw-bold">Rp.200.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/uploads/1761105011-kopiluwak.webp" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge category">Drink</span>
                                <h6 class="card-title mt-2 mb-2">Luwak Coffee</h6>
                                <p class="card-text text-primary fw-bold">Rp.200.000,-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 cart-section">
                <div class="cart-header">
                    <h4>Cart</h4>
                    <small>Order # <span class="orderNumber">001</span></small>
                </div>
                <div class="cart-items" id="cartItems">
                    <div class="text-center text-muted mt-5">
                        <i class="bi bi-cart mb-3"></i>
                        <p>Your Cart Is Empty</p>
                    </div>
                </div>

                <div class="cart-footer">
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal :</span>
                            <span id="subtotal">Rp.100.000</span>
                        </div>
                    </div>
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pajak (10%) :</span>
                            <span id="subtotal">Rp.10.000</span>
                        </div>
                    </div>
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Total :</span>
                            <span id="total">Rp.110.000</span>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <button class="btn btn-outline-danger w-100">
                            <i class="bi bi-trash"></i> Clear Cart
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-checkout btn-primary w-100">
                            <i class="bi bi-cash"></i> Process Payment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script>
        // variable = tempat menyimpan data
        // js variable = 
        // 1. let (untuk menulis variable yang umum digunakan )
        // 2. var (sudah jarang dipakai karena mudah error)
        // 3. const(tetap tidak boleh berubah nilai)
        // php variable = $, define, const

        // let nama = "syahirah khairunnisa";
        // var name = "syahi";
        // const fullname = "syahirah";

        // console.log({"nama" : name, "fullname": fullname});
        // alert(nama);

        // operator
        let angka1 = 10;
        let angka2 = 20;
        console.log(angka1 + angka2);
        console.log(angka1 - angka2);
        console.log(angka1 / angka2);
        console.log(angka1 * angka2);
        console.log(angka1 % angka2);
        console.log(angka1 ** angka2);

        // operator penugasan
        let x = 10;
        x += 5; //15
        console.log(x);

        // operator pembandingan
        // >, <, =, ==, ===, !==
        let a = 1;
        let b = 1;
        if (a == b) {
            console.log("ya")
        } else {
            console.log("tidak")
        }

        console.log(a > b)
        console.log(a < b)

        // operator logika
        // &&, AND(2/2 data harus benar), ||, OR(1 dari 2 data), !: tidak / not
        let umur = 20;
        let punyaSim = true;
        if(umur >= 17 && punyaSim) {
            console.log("boleh mengemudi");
        } else {
            console.log("tidak boleh mengemudi");
        }

        // array = satu tipe data yang dapat memiliki nilai lebih dari satu
        let buah = ['pisang', 'salak', 'semangka'];
                    //  0        1        2
        console.log("buah di keranjang:", buah)
        console.log("saya mau buah :", buah[1]);
        buah[1] = "nanas";
        console.log("Buah baru :", buah);
        buah.push('pepaya')
        console.log("Buah", buah);
        buah.pop();
        console.log("Buah", buah);
    </script>
</body>

</html>