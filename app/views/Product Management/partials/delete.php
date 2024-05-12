<aside class="product-delete-confirm">
<!-- views/Product Management/partials/delete.php -->
    <h2>Delete Product</h2>
    <p>Are you sure you want to delete this product?</p>
    <form action="/Product/delete/<?= htmlspecialchars($product->product_id) ?>" method="post">
        <input type="hidden" name="product_id" value="<?= htmlspecialchars($product->product_id) ?>">
        <input type="submit" value="Delete" class="btn btn-danger">
        <a href="/product/adminCreate" class="btn btn-secondary">Cancel</a>
    </form>
</aside>
