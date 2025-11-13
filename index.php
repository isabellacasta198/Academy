<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcademyX - Iniciar sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
  body {
    background-color: #F3F7FB;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
  }

  /* LOGIN */
  .login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: linear-gradient(135deg, #E3F2FD, #BBDEFB);
  }

  .login-box {
    background: #fff;
    border-radius: 16px;
    padding: 30px 40px;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 350px;
    transition: all 0.3s ease;
  }

  .login-box h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .login-box p {
    font-size: 14px;
    color: #757575;
    margin-bottom: 20px;
  }

  .login-icon {
    font-size: 45px;
    color: #1E88E5;
    margin-bottom: 10px;
  }

  .btn-login {
    background-color: #1E88E5;
    color: white;
    border-radius: 10px;
    width: 100%;
    margin-top: 10px;
    padding: 8px;
    font-size: 15px;
  }

  .btn-login:hover {
    background-color: #1565C0;
  }

  .link-toggle {
    color: #1E88E5;
    text-decoration: none;
    font-weight: 500;
    cursor: pointer;
  }

  .link-toggle:hover {
    text-decoration: underline;
  }

  /* MAIN */
  main {
    display: none;
    min-height: 100vh;
    background: #FAFAFA;
  }

  header {
    background-color: #fff;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
  }

  .navbar-brand {
    font-weight: 600;
    color: #1E88E5 !important;
  }

  .nav-link {
    color: #424242 !important;
    font-weight: 500;
    cursor: pointer;
    font-size: 15px;
  }

  .nav-link:hover,
  .nav-link.active {
    color: #1E88E5 !important;
  }

  /* HERO */
  .hero {
    background: linear-gradient(90deg, #1E88E5, #64B5F6);
    color: white;
    padding: 50px 0;
    text-align: center;
  }

  .hero h1 {
    font-weight: 700;
    font-size: 32px;
  }

  .hero p {
    font-size: 16px;
    color: #E3F2FD;
  }

  /* CURSOS */
  .courses {
    padding: 40px 0;
  }

  .courses h2 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s;
  }

  .card:hover {
    transform: translateY(-3px);
  }

  .badge-level {
    background: #1E88E5;
    color: #fff;
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
  }

  .btn-add {
    background-color: #1E88E5;
    color: white;
    border-radius: 8px;
    width: auto;
    padding: 5px 10px;
  }

  /* MIS CURSOS */
  .dashboard,
  .cart {
    padding: 40px 0;
    display: none;
  }

  .stat-box {
    background: #fff;
    border-radius: 12px;
    text-align: center;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  }

  .stat-box h4 {
    color: #1E88E5;
    font-weight: 700;
    font-size: 18px;
  }

  .course-progress {
    background: #fff;
    padding: 15px;
    border-radius: 12px;
    margin-top: 25px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  }

  .btn-learn {
    background-color: #1E88E5;
    color: white;
    border: none;
    border-radius: 10px;
    padding: 6px 12px;
  }

  /* CARRITO */
  .cart-icon {
    font-size: 45px;
    color: #1E88E5;
    margin-bottom: 10px;
  }

  .btn-explore {
    background-color: #1E88E5;
    color: white;
    border-radius: 8px;
    padding: 8px 20px;
    font-size: 14px;
  }

  /* DETALLE CURSO */
  .course-detail {
    padding: 50px 0;
  }

  .course-detail h1 {
    font-size: 28px;
  }

  .course-detail h2 {
    font-size: 24px;
  }

  /* FOOTER */
  footer {
    background-color: #fff;
    text-align: center;
    padding: 15px;
    color: #616161;
    font-size: 13px;
    border-top: 1px solid #eee;
  }

  /* GENERAL */
  @media (max-width: 768px) {
    .login-box {
      padding: 25px;
      max-width: 90%;
    }
    .hero h1 {
      font-size: 26px;
    }
  }
</style>

</head>
<body>
  

  <!-- LOGIN -->
  <div class="login-container" id="loginContainer">
    <div class="login-box" id="loginBox">
      <div class="login-icon">🎓</div>
      <h2>Inicia Sesión</h2>
      <p>Únete a miles de estudiantes en AcademyX</p>
      <form id="loginForm">
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="tu@email.com" required>
        </div>
        <div class="mb-3 text-start">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="••••••••" required>
        </div>
        <button type="submit" class="btn btn-login">Iniciar sesión</button>
      </form>
      <p class="mt-3">¿No tienes cuenta? <span class="link-toggle" id="mostrarRegistro">Regístrate</span></p>
    </div>

    <!-- REGISTRO -->
    <div class="login-box" id="registroBox" style="display:none;">
      <div class="login-icon">🎓</div>
      <h2>Crea tu cuenta</h2>
      <p>Comienza a aprender hoy mismo</p>
      <form id="registroForm">
        <div class="mb-3 text-start">
          <label for="nombreRegistro" class="form-label">Nombre completo</label>
          <input type="text" class="form-control" id="nombreRegistro" placeholder="Tu nombre" required>
        </div>
        <div class="mb-3 text-start">
          <label for="emailRegistro" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="emailRegistro" placeholder="tu@email.com" required>
        </div>
        <div class="mb-3 text-start">
          <label for="passwordRegistro" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="passwordRegistro" placeholder="••••••••" required>
        </div>
        <label class="form-label">Tipo de cuenta</label>
      <div class="form-check form-switch mb-2">
        <input class="form-check-input" type="checkbox" id="tipoEstudiante">
        <label class="form-check-label" for="tipoEstudiante">Estudiante</label>
      </div>
      <div class="form-check form-switch mb-4">
        <input class="form-check-input" type="checkbox" id="tipoInstructor">
        <label class="form-check-label" for="tipoInstructor">Instructor</label>
      </div>
        <button type="submit" class="btn btn-login">Registrarse</button>
      </form>
      <p class="mt-3">¿Ya tienes cuenta? <span class="link-toggle" id="mostrarLogin">Inicia sesión</span></p>
    </div>
  </div>

  
  <!-- MAIN -->
  <main id="mainContent">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
          <a class="navbar-brand" href="#">🎓 AcademyX</a>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item"><a id="inicioLink" class="nav-link active">Inicio</a></li>
              <li class="nav-item"><a id="misCursosLink" class="nav-link">Mis Cursos</a></li>
              <li class="nav-item"><a id="carritoLink" class="nav-link">🛒 <span id="carritoCount" class="badge bg-primary">0</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- HERO -->
    <section class="hero" id="heroSection">
      <div class="container">
        <h1>Aprende sin límites</h1>
        <p>Accede a miles de cursos profesionales y desarrolla tus habilidades.</p>
      </div>
    </section>

    <!-- CURSOS -->
    <section class="courses" id="coursesSection">
      <div class="container">
        <h2>Cursos populares</h2>
        <div class="row mt-4" id="listaCursos"></div>
      </div>
    </section>

    <!-- SECCIÓN MIS CURSOS -->
    <section class="dashboard" id="misCursosSection">
      <div class="container">
        <h1 class="fw-bold mb-2">Mis cursos</h1>
        <p class="text-muted mb-4">Continúa aprendiendo donde lo dejaste</p>

        <div class="row g-4">
          <div class="col-md-3"><div class="stat-box"><h4>3</h4><p>Cursos activos</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>112</h4><p>Horas totales</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>1</h4><p>Certificados</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>2</h4><p>En progreso</p></div></div>
        </div>

        <div class="course-progress mt-4">
          <div class="row align-items-center">
            <div class="col-md-2">
              <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?auto=format&fit=crop&w=800&q=60" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-7">
              <h5>Desarrollo Web Completo 2025</h5>
              <p class="text-muted mb-1">Por Dr. Carlos Martínez</p>
              <div class="d-flex justify-content-between">
                <small>Progreso del curso</small>
                <small class="text-primary">45% completado</small>
              </div>
              <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width:45%"></div>
              </div>
              <small class="text-muted">70 de 156 lecciones completadas</small>
            </div>
            <div class="col-md-3 text-end">
              <span class="badge bg-warning text-dark mb-2">En progreso</span><br>
              <button class="btn btn-learn">Continuar aprendiendo</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CARRITO -->
    <section class="cart" id="carritoSection">
      <div class="container text-center">
        <h1 class="fw-bold mb-1">Carrito de compras</h1>
        <p class="text-muted mb-4">0 cursos en tu carrito</p>
        <div class="cart-box mx-auto" style="max-width:600px;">
          <div class="cart-icon">🛍️</div>
          <h4 class="fw-bold">Tu carrito está vacío</h4>
          <p class="cart-empty-text mb-4">Explora nuestros cursos y encuentra el perfecto para ti</p>
          <a class="btn btn-explore" id="explorarBtn" href="index.php">Explorar cursos</a>

        </div>
      </div>
    </section>

 <!-- DETALLE DE CURSO -->
<section class="course-detail" id="detalleCursoSection" style="display:none; padding:80px 0; background:#0A1C35; color:white;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Columna de texto -->
      <div class="col-md-7">
        <span class="badge bg-primary mb-3" id="detalleNivel">Todos los niveles</span>
        <h1 class="fw-bold mb-3" id="detalleTitulo">Desarrollo Web Completo 2025</h1>
        <p class="lead mb-4" id="detalleDescripcion">
          Aprende HTML, CSS, JavaScript, React y Node.js desde cero hasta nivel avanzado.
        </p>

        <!-- Nueva información del curso -->
        <ul class="list-unstyled mb-4">
          <li class="mb-2"><strong>👨‍🏫 Instructor:</strong> <span id="detalleInstructor">Juan Pérez</span></li>
          <li class="mb-2"><strong>⏱️ Duración:</strong> <span id="detalleDuracion">40 horas</span></li>
          <li class="mb-2"><strong>🎯 Beneficios:</strong></li>
          <ul class="ms-4" id="detalleBeneficios">
            <li>Certificado de finalización</li>
            <li>Acceso de por vida al contenido</li>
            <li>Material descargable</li>
          </ul>
        </ul>

        <div class="d-flex align-items-center mb-3">
          <span class="me-3">⭐ 4.8 (12.450 estudiantes)</span>
        </div>
        <h2 class="text-info fw-bold mb-4" id="detallePrecio">$49.99</h2>

        <button class="btn btn-primary me-2" id="agregarCarritoBtn" style="border-radius:10px;">Agregar al carrito</button>
        <button class="btn btn-light" id="volverCursosBtn" style="border-radius:10px;">Volver a cursos</button>
      </div>

      <!-- Imagen del curso -->
      <div class="col-md-5">
        <img
          id="detalleImg"
          src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?auto=format&fit=crop&w=800&q=60"
          class="img-fluid rounded shadow"
          alt="Curso"
        >
      </div>
    </div>
  </div>
</section>


    <footer>
      <p>© 2025 GestorEstudio - Todos los derechos reservados.</p>
    </footer>
  </main>

 

  // LOGIN Y REGISTRO
  const loginForm = document.getElementById("loginForm");
  const registroForm = document.getElementById("registroForm");
  const loginContainer = document.getElementById("loginContainer");
  const mainContent = document.getElementById("mainContent");
  const loginBox = document.getElementById("loginBox");
  const registroBox = document.getElementById("registroBox");

  const mostrarRegistro = document.getElementById("mostrarRegistro");
  const mostrarLogin = document.getElementById("mostrarLogin");

  // Alternar entre formularios
  mostrarRegistro.addEventListener("click", () => {
    loginBox.style.display = "none";
    registroBox.style.display = "block";
  });

  mostrarLogin.addEventListener("click", () => {
    registroBox.style.display = "none";
    loginBox.style.display = "block";
  });

  // Simular inicio de sesión
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    loginContainer.style.display = "none";
    mainContent.style.display = "block";
    mostrarSeccion("inicio");
  });

  // Simular registro
  registroForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const nombre = document.getElementById("nombreRegistro").value;
    const email = document.getElementById("emailRegistro").value;
    const password = document.getElementById("passwordRegistro").value;

    if (!nombre || !email || !password) {
      alert("Por favor, completa todos los campos");
      return;
    }

    alert("✅ Registro exitoso. Ahora puedes iniciar sesión.");
    registroBox.style.display = "none";
    loginBox.style.display = "block";
  });

  // ===================
  // SECCIONES PRINCIPALES
  // ===================
  const cursos = [
    {id: 1, titulo: "Desarrollo Web Completo 2025", nivel: "Todos los niveles", descripcion: "Aprende HTML, CSS, JavaScript, React y Node.js desde cero hasta nivel avanzado.", precio: 30000, img: "https://images.unsplash.com/photo-1581090700227-1e37b190418e?auto=format&fit=crop&w=800&q=60"},
    {id: 2, titulo: "Matemáticas Avanzadas", nivel: "Intermedio", descripcion: "Domina álgebra, cálculo y estadísticas con ejercicios prácticos y guías paso a paso.", precio: 25000, img: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=60"},
    {id: 3, titulo: "Marketing Digital y Estrategia", nivel: "Principiante", descripcion: "Aprende SEO, redes sociales y publicidad en línea para hacer crecer tu negocio.", precio: 20000, img: "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=60"}
  ];

  const listaCursos = document.getElementById("listaCursos");
  cursos.forEach(curso => {
    const card = document.createElement("div");
    card.className = "col-md-4 mb-4";
    card.innerHTML = `
      <div class="card">
        <img src="${curso.img}" class="card-img-top" alt="${curso.titulo}">
        <div class="card-body">
          <span class="badge-level">${curso.nivel}</span>
          <h5 class="card-title mt-2">${curso.titulo}</h5>
          <p class="text-muted small mb-2">${curso.descripcion}</p>
          <div class="d-flex align-items-center mb-2 text-muted" style="font-size: 14px;">
            <span class="me-2">⭐ 4.8</span>
            <span class="me-2">👥 12,450</span>
            <span>⏱️ 42 horas</span>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <h5 class="mb-0 fw-bold text-primary">$${curso.precio}</h5>
            <div>
              <button class="btn btn-light border me-2 ver-curso-btn" style="border-radius:10px;">Ver curso</button>
              <button class="btn btn-add" style="width:auto; padding:6px 15px;">🛒</button>
            </div>
          </div>
        </div>
      </div>`;
    listaCursos.appendChild(card);
  });

  // Navegación entre secciones
  const inicioLink = document.getElementById("inicioLink");
  const misCursosLink = document.getElementById("misCursosLink");
  const carritoLink = document.getElementById("carritoLink");

  function mostrarSeccion(seccion) {
    document.getElementById("heroSection").style.display = seccion === "inicio" ? "block" : "none";
    document.getElementById("coursesSection").style.display = seccion === "inicio" ? "block" : "none";
    document.getElementById("misCursosSection").style.display = seccion === "misCursos" ? "block" : "none";
    document.getElementById("carritoSection").style.display = seccion === "carrito" ? "block" : "none";
    document.getElementById("detalleCursoSection").style.display = seccion === "detalle" ? "block" : "none";

    inicioLink.classList.toggle("active", seccion === "inicio");
    misCursosLink.classList.toggle("active", seccion === "misCursos");
    carritoLink.classList.toggle("active", seccion === "carrito");
  }

  inicioLink.addEventListener("click", () => mostrarSeccion("inicio"));
  misCursosLink.addEventListener("click", () => mostrarSeccion("misCursos"));
  carritoLink.addEventListener("click", () => mostrarSeccion("carrito"));

  // Mostrar detalle del curso
  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("ver-curso-btn")) {
      const card = e.target.closest(".card");
      const titulo = card.querySelector(".card-title").textContent;
      const descripcion = card.querySelector("p").textContent;
      const img = card.querySelector("img").src;
      const nivel = card.querySelector(".badge-level").textContent;
      const precio = card.querySelector("h5.fw-bold").textContent;

      document.getElementById("detalleTitulo").textContent = titulo;
      document.getElementById("detalleDescripcion").textContent = descripcion;
      document.getElementById("detalleImg").src = img;
      document.getElementById("detalleNivel").textContent = nivel;
      document.getElementById("detallePrecio").textContent = precio;

      mostrarSeccion("detalle");
    }
  });
  

  // Botón volver
  document.getElementById("volverCursosBtn").addEventListener("click", () => {
    mostrarSeccion("inicio");
  });
</script>

</body>
</html>
