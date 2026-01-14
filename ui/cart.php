<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cart</title>

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <style>
      :root {
        --brand-dark: #1f2937;
        --brand-muted: #6b7280;
        --brand-border: #e5e7eb;
        --brand-accent: #111827;
      }

      body {
        background: #f8fafc;
      }

      .cart-card {
        border: 1px solid var(--brand-border);
        border-radius: 12px;
        background: #fff;
      }

      .cart-item {
        border-bottom: 1px solid var(--brand-border);
      }

      .cart-item:last-child {
        border-bottom: 0;
      }

      .product-img {
        width: 84px;
        height: 84px;
        border-radius: 10px;
        object-fit: cover;
        background: #f3f4f6;
      }

      .qty-input {
        width: 88px;
      }

      .muted {
        color: var(--brand-muted);
      }

      .total {
        font-weight: 600;
        color: var(--brand-accent);
      }

      .btn-dark {
        background: var(--brand-dark);
        border-color: var(--brand-dark);
      }

      .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
      }

      .summary-row + .summary-row {
        border-top: 1px dashed var(--brand-border);
      }

      .discount {
        color: #ef4444;
      }

      .delete-btn {
        color: var(--brand-muted);
      }

      .delete-btn:hover {
        color: #ef4444;
      }
    </style>
  </head>

  <body>
    <div class="container py-5">
      <div class="row g-4">
        <!-- CART ITEMS -->
        <div class="col-lg-8">
          <div class="cart-card p-4">
            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">Shopping Cart</h5>
              <span class="muted">3 items</span>
            </div>

            <!-- ITEM 1 -->
            <div class="cart-item py-3">
              <div class="row align-items-center g-3">
                <div class="col-auto">
                  <img
                    src="https://images.unsplash.com/photo-1540573135977-307dc017a43f"
                    class="product-img"
                  />
                </div>
                <div class="col">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Furniture Set</strong>
                      <div class="muted small">Set Colour: Coffee</div>
                    </div>
                    <button class="btn btn-link p-0 delete-btn">
                      <i class="bi bi-trash3"></i>
                    </button>
                  </div>
                  <div class="d-flex align-items-center mt-2">
                    <div class="d-flex align-items-center qty-input">
                      <button class="btn btn-outline-secondary px-3">−</button>
                      <input
                        type="number"
                        class="form-control text-center mx-1"
                        value="4"
                        style="width: 50px"
                      />
                      <button class="btn btn-outline-secondary px-3">+</button>
                    </div>

                    <div class="ms-auto total">$437</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ITEM 2 -->
            <div class="cart-item py-3">
              <div class="row align-items-center g-3">
                <div class="col-auto">
                  <img
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                    class="product-img"
                  />
                </div>
                <div class="col">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Vintage Dining Set</strong>
                      <div class="muted small">Set Colour: Bronze</div>
                    </div>
                    <button class="btn btn-link p-0 delete-btn">
                      <i class="bi bi-trash3"></i>
                    </button>
                  </div>
                  <div class="d-flex align-items-center mt-2">
                    <div class="d-flex align-items-center qty-input">
                      <button class="btn btn-outline-secondary px-3">−</button>
                      <input
                        type="number"
                        class="form-control text-center mx-1"
                        value="4"
                        style="width: 50px"
                      />
                      <button class="btn btn-outline-secondary px-3">+</button>
                    </div>
                    <div class="ms-auto total">$945</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ITEM 3 -->
            <!-- ITEM 2 -->
            <div class="cart-item py-3">
              <div class="row align-items-center g-3">
                <div class="col-auto">
                  <img
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                    class="product-img"
                  />
                </div>
                <div class="col">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Vintage Dining Set</strong>
                      <div class="muted small">Set Colour: Bronze</div>
                    </div>
                    <button class="btn btn-link p-0 delete-btn">
                      <i class="bi bi-trash3"></i>
                    </button>
                  </div>
                  <div class="d-flex align-items-center mt-2">
                    <div class="d-flex align-items-center qty-input">
                      <button class="btn btn-outline-secondary px-3">−</button>
                      <input
                        type="number"
                        class="form-control text-center mx-1"
                        value="4"
                        style="width: 50px"
                      />
                      <button class="btn btn-outline-secondary px-3">+</button>
                    </div>
                    <div class="ms-auto total">$945</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-end mt-4">
              <button class="btn btn-dark">Update Cart</button>
            </div>
          </div>
        </div>

        <!-- ORDER SUMMARY -->
        <div class="col-lg-4">
          <div class="cart-card p-4">
            <h5 class="mb-3">Order Summary</h5>

            <div class="input-group mb-3">
              <input class="form-control" placeholder="Discount code" />
              <button class="btn btn-outline-secondary">Apply</button>
            </div>

            <div class="summary-row">
              <span>Sub Total</span>
              <span>$2,000</span>
            </div>
            <div class="summary-row">
              <span>Discount (10%)</span>
              <span class="discount">−$200</span>
            </div>
            <div class="summary-row">
              <span>Delivery Fee</span>
              <span>$50</span>
            </div>
            <div class="summary-row fw-bold">
              <span>Total</span>
              <span>$1,850</span>
            </div>

            <div class="d-grid mt-4">
              <button class="btn btn-dark">Checkout Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
