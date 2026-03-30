<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Muse - Intro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
            background: #050A30;
            overflow: hidden;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
        }

        .intro-screen {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background:
                radial-gradient(circle at top left, rgba(183, 147, 71, 0.14), transparent 26%),
                radial-gradient(circle at bottom right, rgba(255, 255, 255, 0.06), transparent 24%),
                linear-gradient(135deg, #02061d 0%, #050A30 48%, #020826 100%);
        }

        .intro-glow {
            position: absolute;
            border-radius: 999px;
            filter: blur(90px);
            opacity: .45;
            pointer-events: none;
        }

        .intro-glow-1 {
            width: 260px;
            height: 260px;
            top: 8%;
            left: 10%;
            background: rgba(183, 147, 71, 0.24);
            animation: glowFloat 2.6s ease-in-out infinite alternate;
        }

        .intro-glow-2 {
            width: 320px;
            height: 320px;
            right: 8%;
            bottom: 8%;
            background: rgba(255, 255, 255, 0.08);
            animation: glowFloat 2.8s ease-in-out infinite alternate-reverse;
        }

        .intro-wrap {
            position: relative;
            z-index: 2;
            width: min(1100px, 92vw);
            text-align: center;
            padding: 2rem 1rem;
        }

        .intro-badge {
            display: inline-block;
            margin-bottom: 1.4rem;
            padding: .5rem 1rem;
            border: 1px solid rgba(183, 147, 71, 0.5);
            border-radius: 999px;
            color: #d7c28b;
            background: rgba(255, 255, 255, 0.03);
            letter-spacing: .18em;
            text-transform: uppercase;
            font-size: .75rem;
            opacity: 0;
            animation: fadeIn .6s ease forwards;
        }

        .intro-brush {
            width: min(980px, 92vw);
            height: auto;
            display: block;
            margin: 0 auto 1.2rem auto;
            overflow: visible;
        }

        .intro-brush path {
            fill: none;
            stroke: rgba(183, 147, 71, 0.95);
            stroke-width: 6;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 1400;
            stroke-dashoffset: 1400;
            animation: drawBrush 1.3s ease forwards;
        }

        .intro-title {
            margin: 0;
            color: #f6f4ef;
            font-size: clamp(2.2rem, 6vw, 5.2rem);
            font-weight: 700;
            letter-spacing: .02em;
            opacity: 0;
            transform: translateY(18px);
            animation: titleReveal .8s ease forwards;
            animation-delay: .8s;
            text-shadow: 0 0 24px rgba(255,255,255,0.08);
        }

        .intro-title .accent {
            color: #d7c28b;
        }

        .intro-subtitle {
            margin-top: 1rem;
            color: rgba(244, 246, 252, 0.76);
            font-size: 1rem;
            letter-spacing: .05em;
            opacity: 0;
            transform: translateY(12px);
            animation: titleReveal .8s ease forwards;
            animation-delay: 1.2s;
        }

        .intro-fade-out {
            animation: fadeOutScreen .45s ease forwards;
        }

        @keyframes drawBrush {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes titleReveal {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes glowFloat {
            from {
                transform: translateY(0) scale(1);
            }
            to {
                transform: translateY(-14px) scale(1.05);
            }
        }

        @keyframes fadeOutScreen {
            to {
                opacity: 0;
                transform: scale(1.01);
            }
        }

        @media (max-width: 768px) {
            .intro-subtitle {
                font-size: .92rem;
            }

            .intro-brush path {
                stroke-width: 5;
            }
        }
    </style>
</head>
<body>
    <div class="intro-screen" id="introScreen">
        <div class="intro-glow intro-glow-1"></div>
        <div class="intro-glow intro-glow-2"></div>

        <div class="intro-wrap">
            <div class="intro-badge">Muse</div>

            <svg class="intro-brush" viewBox="0 0 1200 180" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M120 120
                         C 220 40, 330 40, 430 92
                         S 650 155, 760 90
                         S 970 35, 1080 88" />
            </svg>

            <h1 class="intro-title">
                Ready to <span class="accent">Muse?</span>
            </h1>

            <p class="intro-subtitle">Preparing your space inside the gallery.</p>
        </div>
    </div>

    <script>
        const introScreen = document.getElementById('introScreen');

        setTimeout(function () {
            introScreen.classList.add('intro-fade-out');
        }, 2100);

        setTimeout(function () {
            window.location.href = "{{ route('dashboard') }}";
        }, 2550);
    </script>
</body>
</html>