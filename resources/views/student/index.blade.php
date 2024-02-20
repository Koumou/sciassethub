<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Microscope</title>
    <style>
        html,
        body {
            background: #000;
            width: 100%;
            height: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0;
        }

        #gameContainer {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
        }

        #unity-canvas {
            width: 100%;
            height: 100%;
        }

        [data-pixel-art="true"] {
            image-rendering: optimizeSpeed;
            image-rendering: -webkit-crisp-edges;
            image-rendering: -moz-crisp-edges;
            image-rendering: -o-crisp-edges;
            image-rendering: crisp-edges;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: optimize-contrast;
            image-rendering: pixelated;
            -ms-interpolation-mode: nearest-neighbor;
        }
    </style>
</head>

<body>
    <div id="gameContainer">
        <canvas id="unity-canvas" data-pixel-art=""></canvas>
        <script src="Build/public.loader.js"></script>
        <script>
            var canvas = document.querySelector("#unity-canvas");
            var config = {
                dataUrl: "Build/public.data",
                frameworkUrl: "Build/public.framework.js",
                codeUrl: "Build/public.wasm",
                streamingAssetsUrl: "StreamingAssets",
                companyName: "DefaultCompany",
                productName: "Microscope",
                productVersion: "0.1",
            };
            var scaleToFit;
            try {
                scaleToFit = !!JSON.parse("");
            } catch (e) {
                scaleToFit = true;
            }
            function progressHandler(progress) {
                var percent = progress * 100 + '%';
                canvas.style.background = 'linear-gradient(to right, white, white ' + percent + ', transparent ' + percent + ', transparent) no-repeat center';
                canvas.style.backgroundSize = '100% 1rem';
            }

            function onResize() {
                // Your resize logic here
                // This function is called whenever the window is resized
            }

            function handle3DInteraction() {
                // Call a function in your Unity script to handle the interaction
                unityInstance.DisplayName('YourObjectName', 'HandleClick');
            }

            createUnityInstance(canvas, config, progressHandler).then(function (instance) {
                canvas = instance.Module.canvas;
                onResize();
            });

            window.addEventListener('resize', onResize);

            // Attach an event listener to handle 3D interactions
            canvas.addEventListener('click', handle3DInteraction);
        </script>
    </div>
</body>

</html>
