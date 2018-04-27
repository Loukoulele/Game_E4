<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <meta http-equiv="refresh" content="7 ; url=game/index.php">
            <title>Boucle d'animation</title>
        </head>
        <body style="margin: 0px; overflow: hidden" background:url("img/loading.png")>

            <canvas id="canvas"></canvas>

            <script>
    // Initialisation des variables globales
    var width = window.innerWidth,
        height = window.innerHeight,
        ratio = window.devicePixelRatio;
    var x = width / 2,
        r = 40,
        step = 0,
        vx = r * 0.2;
    var sprites = new Image();
    sprites.onload = animate;
    sprites.src = "img/shell.png";
    var canvas = document.getElementById("canvas"),
        context = canvas.getContext("2d");
    canvas.width  = width  * ratio;
    canvas.height = height * ratio;
    canvas.style.width  = width  + "px";
    canvas.style.height = height + "px";
    context.scale(ratio, ratio);
    context.imageSmoothingEnabled = false;
    context.fillStyle = "rgba(255, 255, 255, 0.25)";
    function animate() {
        draw();
        update();
        requestAnimationFrame(animate);
    }
    function draw() {
        context.fillRect(0, 0, width, height);

        // Affichage
        drawShell(x, height, r, Math.floor(step));
    }
    function drawShell(x, y, r, step) {
        var s = r/12;

        context.drawImage(sprites, 32*step, 0, 32, 32, x - 16*s, y - 26*s, 32*s, 32*s);
    }
    function update() {
        // Mise à jour des variables
        x += vx;

        if (x < r || x > width - r) {
            vx *= -1;
        }

        step += 0.3;
        if (step >= 12)
            step -= 12;
    }
            </script>

        </body>
    </html>
