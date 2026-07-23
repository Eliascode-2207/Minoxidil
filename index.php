<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minoxidil Kirkland | Tienda Oficial Medellín</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --minoxidil-blue: #0b2545; /* Azul oscuro característico de la marca */
            --card-bg: #13315c;       /* Azul un poco más claro para las tarjetas */
            --text-light: #ffffff;
            --accent-green: #28a745;
        }

        body {
            background-color: var(--minoxidil-blue);
            color: var(--text-light);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .navbar-custom {
            background-color: #071930;
            border-bottom: 1px solid #13315c;
        }

        .main-container {
            margin-top: 30px;
        }

        .product-card {
            background-color: var(--card-bg);
            border: 1px solid #1d4ed8;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .product-image-wrapper {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
        }

        .form-control-custom {
            background-color: #0b2545;
            border: 1px solid #204070;
            color: #ffffff;
        }
        .form-control-custom:focus {
            background-color: #13315c;
            border-color: #ffffff;
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        
        .form-label {
            color: #ffffff;
            font-weight: 500;
        }

        .price-tag {
            font-size: 2.5rem;
            font-weight: 800;
            color: #4ade80;
        }
        
        .btn-success-custom {
            background-color: var(--accent-green);
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-success-custom:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .benefit-icon {
            color: #60a5fa;
            font-size: 1.5rem;
            margin-right: 10px;
        }

        /* Estilos para la sección de Pasos */
        .step-card {
            background-color: var(--card-bg);
            border: 1px solid #204070;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }
        .step-card:hover {
            transform: translateY(-5px);
            border-color: #ffffff;
        }
        .step-number {
            width: 40px;
            height: 40px;
            background-color: #2563eb;
            color: white;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px auto;
        }

        .footer-custom {
            background-color: #071930;
            border-top: 1px solid #13315c;
            margin-top: 50px;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">
                <i class="bi bi-droplet-half me-2 text-info"></i>Minoxidil Medellín - Original
            </a>
            <span class="navbar-text text-success small">
                <i class="bi bi-truck me-1"></i> Pago Contra Entrega en el Valle de Aburrá
            </span>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                
                <div class="card product-card p-4 p-md-5">
                    <div class="row align-items-center">
                        
                        <!-- Columna Izquierda: Imagen y Beneficios -->
                        <div class="col-md-6 text-center mb-4 mb-md-0">
                            <div class="product-image-wrapper mb-4">
                                <img src="img/minoxidil.jpg" class="img-fluid" alt="Minoxidil Kirkland 5%" style="max-height: 280px; object-fit: contain;" onerror="this.src='https://images.unsplash.com/photo-1626497764746-6dc36546b388?auto=format&fit=crop&w=400&q=80'">
                            </div>
                            
                            <div class="text-start d-inline-block text-light">
                                <p class="text-white"><i class="bi bi-check-circle-fill benefit-icon"></i>Estimula el crecimiento de folículos</p>
                                <p class="text-white"><i class="bi bi-check-circle-fill benefit-icon"></i>Detiene la caída del cabello y barba</p>
                                <p class="text-white"><i class="bi bi-check-circle-fill benefit-icon"></i>Resultados visibles desde el 3er mes</p>
                            </div>
                        </div>

                        <!-- Columna Derecha: Formulario de Pedido -->
                        <div class="col-md-6">
                            <h1 class="fs-2 fw-bolder mb-1 text-white">Minoxidil Kirkland 5%</h1>
                            <p class="text-white-50 mb-4">Tratamiento tópico original de 60ml (1 Frasco).</p>

                            <div class="mb-4">
                                <span class="text-decoration-line-through text-white-50 me-2">$ 110.000</span>
                                <span class="price-tag">$ 95.000 COP</span>
                            </div>
                            
                            <form action="procesar.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label small">Nombre Completo</label>
                                    <input type="text" class="form-control form-control-custom shadow-none" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label small">Número de WhatsApp</label>
                                    <input type="tel" class="form-control form-control-custom shadow-none" id="telefono" name="telefono" placeholder="Ej: 300 123 4567" required>
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label small">Dirección de Entrega</label>
                                    <textarea class="form-control form-control-custom shadow-none" id="direccion" name="direccion" rows="2" placeholder="Barrio, calle, número, apto" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success-custom w-100 shadow-none">
                                    <i class="bi bi-cart-plus-fill me-2"></i>Solicitar Frasco Ahora
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <!-- SECCIÓN DE INSTRUCCIONES DE USO -->
                <div class="mt-5 pt-3">
                    <h2 class="text-center fw-bold text-white mb-4">¿Cómo se usa correctamente?</h2>
                    <div class="row g-4">
                        
                        <!-- Paso 1 -->
                        <div class="col-md-4">
                            <div class="step-card p-4 text-center h-100">
                                <div class="step-number">1</div>
                                <h5 class="fw-bold text-white mb-2">Limpia tu rostro</h5>
                                <p class="text-white small mb-0">Lava muy bien la zona de la barba o el cuero cabelludo con agua tibia y jabón neutro, luego seca.</p>
                            </div>
                        </div>

                        <!-- Paso 2 -->
                        <div class="col-md-4">
                            <div class="step-card p-4 text-center h-100">
                                <div class="step-number">2</div>
                                <h5 class="fw-bold text-white mb-2">Aplica 1 ml</h5>
                                <p class="text-white small mb-0">Usa el gotero aplicador para medir 1 ml y esparce el líquido dando suaves masajes con las yemas de los dedos.</p>
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="col-md-4">
                            <div class="step-card p-4 text-center h-100">
                                <div class="step-number">3</div>
                                <h5 class="fw-bold text-white mb-2">Deja actuar</h5>
                                <p class="text-white small mb-0">No lo enjuagues durante al menos 4 horas. Se recomienda aplicar 2 veces al día (mañana y noche).</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sección de Confianza Adicional -->
                <div class="row mt-5 text-center text-white">
                    <div class="col-4">
                        <i class="bi bi-shield-check fs-1 text-info"></i>
                        <p class="small mt-2 mb-0 text-white">Producto Auténtico</p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-person-check fs-1 text-info"></i>
                        <p class="small mt-2 mb-0 text-white">Asesoría Post-Venta</p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-cash-coin fs-1 text-info"></i>
                        <p class="small mt-2 mb-0 text-white">Pago al Recibir</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 footer-custom">
        <div class="container">
            <p class="mb-1 small fw-bold text-white">Distribuidores Autorizados Kirkland Signature</p>
            <p class="mb-0 text-white-50 small">&copy; 2026 | Prohibida la reproducción total o parcial.</p>
        </div>
    </footer>

</body>
</html>