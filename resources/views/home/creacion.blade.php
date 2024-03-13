<!DOCTYPE html>
<html lang="es">
<head>
    <title>Creacion Articulo</title>
</head>
<body>

    <h1> Creacion item </h1>

    <form action="/items" method = "POST" role="form">
        @csrf
        
        <div class = "form-group">
            <h5>Name</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="name">
        </div>
        <div class = "form-group">
            <h5>Description</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="description">
        </div>
        <div class = "form-group">
            <h5>Stock Quantitiy</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter stock quantity" name="stock">
        </div>
        <div class = "form-group">
            <h5>Price</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter price" name="price">
        </div>


        <button type="submit" class="btn btn-primary" > Crear Item </button>
    </form>
</body>
</html>