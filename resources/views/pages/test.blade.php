<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buttons</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="stylesheet" href="index.css" />
    <style>
        .grid > div {
            height: 78px;
        }

        .frame {
            translate: 0 10px;
        }

        .frame header {
            top: -60px;
        }

        .frame h3 {
            bottom: -24px;
        }

        button {
            font-family: inherit;
            cursor: pointer;
        }

        /* btn-1 */



        /* btn-2 */

        .btn-2 {
            scale: 0.5;
            position: absolute;
            font-family: inherit;
            font-size: 18px;
            background: #000;
            color: white;
            padding: 15px 24px 15px 24px;
            width: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 30px;
            overflow: hidden;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-2 span {
            display: block;
            margin-left: 0.3em;
            transition: all 0.3s ease-in-out;
        }

        .btn-2 svg {
            display: block;
            transform-origin: center center;
            transition: transform 0.3s ease-in-out;
        }

        .btn-2:hover .svg-wrapper {
            animation: fly-1 0.6s ease-in-out infinite alternate;
        }

        .btn-2:hover svg {
            transform: translateX(1.2em) rotate(45deg) scale(1.1);
        }

        .btn-2:hover span {
            transform: translateX(5em);
        }

        .btn-2:active {
            transform: scale(0.95);
        }

        @keyframes fly-1 {
            from {
                transform: translateY(0.1em);
            }

            to {
                transform: translateY(-0.1em);
            }
        }

        /* btn-3 */

        .btn-3 {
            scale: 0.5;
            position: absolute;
            overflow: hidden;
            border: 1px solid #18181a;
            color: #18181a;
            display: inline-block;
            font-size: 18px;
            font-weight: 500;
            line-height: 15px;
            padding: 19px 18px 19px;
            width: 140px;
            text-decoration: none;
            cursor: pointer;
            background: #fff;
            border-radius: 30px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .btn-3 span:first-child {
            position: relative;
            transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
            z-index: 10;
        }

        .btn-3 span:last-child {
            color: white;
            display: block;
            position: absolute;
            bottom: 0;
            transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
            z-index: 100;
            opacity: 0;
            top: 50%;
            left: 50%;
            transform: translateY(225%) translateX(-50%);
            height: 14px;
            line-height: 13px;
        }

        .btn-3:after {
            content: "";
            position: absolute;
            bottom: -50%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #8f44fd;
            transform-origin: bottom center;
            transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
            transform: skewY(9.3deg) scaleY(0);
            z-index: 50;
        }

        .btn-3:hover:after {
            transform-origin: bottom center;
            transform: skewY(9.3deg) scaleY(2);
        }

        .btn-3:hover span:last-child {
            transform: translateX(-50%) translateY(-50%);
            opacity: 1;
            transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
        }

        /* btn-4 */

        .btn-4 {
            scale: 0.55;
            position: absolute;
            margin: auto;
            padding: 13px 18px;
            transition: all 0.2s ease;
            border: none;
            white-space: nowrap;
            background: none;
            cursor: pointer;
        }

        .btn-4:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            border-radius: 50px;
            background: #8f44fd;
            width: 50px;
            height: 50px;
            transition: all 0.3s ease;
        }

        .btn-4 span {
            position: relative;
            font-size: 18px;
            font-weight: 500;
            color: #f9f9f9;
        }

        .btn-4 svg {
            position: relative;
            top: 0;
            margin-left: 10px;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke: #f9f9f9;
            stroke-width: 2;
            transform: translateX(-5px);
            transition: all 0.3s ease;
        }

        .btn-4:hover:before {
            width: 100%;
            background: #8f44fd;
        }

        .btn-4:hover svg {
            transform: translateX(0);
        }

        .btn-4:active {
            transform: scale(0.95);
        }

        /* btn-5 */

        .btn-5 {
            scale: 0.5;
            position: absolute;
            overflow: hidden;
            width: 140px;
            height: 56px;
            border-radius: 30px;
            border: 0;
            color: #f7f7f7;
            background: #8f44fd;
            font-family: "Euclid Circular A", "Poppins";
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-5 i {
            font-size: 18px;
        }

        .btn-5-text,
        .btn-5-links {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            height: 100%;
            transition: 0.3s;
        }

        .btn-5-text {
            gap: 10px;
            justify-content: center;
            color: inherit;
            font-size: 18px;
        }

        .btn-5-links {
            opacity: 0;
            justify-content: space-between;
            padding: 0 24px;
            transition: 0.2s;
        }

        .btn-5-links a {
            translate: 0 50px;
            font-size: 24px;
            transition: 0.3s;
        }

        .btn-5:hover {
            border-radius: 10px;
        }

        .btn-5:hover .btn-5-links a:nth-child(1) {
            transition-delay: 0.05s;
        }

        .btn-5:hover .btn-5-links a:nth-child(2) {
            transition-delay: 0.1s;
        }

        .btn-5:hover .btn-5-links a:nth-child(3) {
            transition-delay: 0.15s;
        }

        .btn-5:hover .btn-5-text {
            translate: 0 -100%;
        }

        .btn-5:hover .btn-5-links {
            opacity: 1;
        }

        .btn-5:hover .btn-5-links a {
            translate: 0;
        }

        .btn-5-links i {
            color: #f7f7f7;
        }

        /* btn-6 */

        .btn-6 {
            position: absolute;
            scale: 0.5;
            display: flex;
            justify-content: center;
            --color-text: #ffffff;
            --color-background: #8f44fd;
            --color-outline: #ff145b80;
            --color-shadow: #00000080;
        }

        .btn-6 .btn-content {
            display: flex;
            align-items: center;
            padding: 4px 20px 4px 28px;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            color: var(--color-text);
            background: black;
            transition: 1s;
            border-radius: 100px;
            box-shadow: 0 0 0.2em 0 var(--color-background);
        }

        .btn-6 .btn-content:hover,
        .btn-content:focus {
            transition: 0.5s;
            -webkit-animation: btn-content 1s;
            animation: btn-content 1s;
            outline: 0.1em solid transparent;
            outline-offset: 0.2em;
            box-shadow: 0 0 0.4em 0 var(--color-background);
        }

        .btn-6 .btn-content .icon-arrow {
            transition: 0.5s;
            margin-right: 0px;
            transform: scale(0.6);
        }

        .btn-6 .btn-content:hover .icon-arrow {
            transition: 0.5s;
            margin-right: 25px;
        }

        .btn-6 .icon-arrow {
            width: 20px;
            margin-left: 15px;
            position: relative;
            top: 2px;
            scale: 0.8;
        }

        /* SVG */
        .btn-6 #arrow-icon-one {
            transition: 0.4s;
            transform: translateX(-60%);
        }

        .btn-6 #arrow-icon-two {
            transition: 0.5s;
            transform: translateX(-30%);
        }

        .btn-6 .btn-content:hover #arrow-icon-three {
            animation: color_anim 1s infinite 0.2s;
        }

        .btn-6 .btn-content:hover #arrow-icon-one {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.6s;
        }

        .btn-6 .btn-content:hover #arrow-icon-two {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.4s;
        }

        /* SVG animations */
        @keyframes color_anim {
            0% {
                fill: white;
            }

            50% {
                fill: var(--color-background);
            }

            100% {
                fill: white;
            }
        }

        /* Button animations */
        @-webkit-keyframes btn-content {
            0% {
                outline: 0.2em solid var(--color-background);
                outline-offset: 0;
            }
        }

        @keyframes btn-content {
            0% {
                outline: 0.2em solid var(--color-background);
                outline-offset: 0;
            }
        }
    </style>
</head>
<body>
<div class="frame">
    <header>
        <h2>Save These</h2>
        <h1 style="font-size: 19px">CSS Buttons</h1>
    </header>
    <div class="grid two-col">
        <div>
            <p>1</p>
            <a class="btn-1"><span>Continue</span></a>
        </div>
        <div>
            <p>2</p>
            <button class="btn-2">
                <div class="svg-wrapper-1">
                    <div class="svg-wrapper">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                        >
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                fill="currentColor"
                                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                            ></path>
                        </svg>
                    </div>
                </div>
                <span>Send</span>
            </button>
        </div>
        <div>
            <p>3</p>
            <button class="btn-3">
                <span class="text">Submit</span><span>Thanks!</span>
            </button>
        </div>
        <div>
            <p>4</p>
            <button class="btn-4">
                <span>Sign up</span>
                <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </button>
        </div>
        <div>
            <p>5</p>
            <button class="btn-5">
            <span class="btn-5-text">
              <span> Share </span>
              <i class="fa-solid fa-share-nodes"></i>
            </span>
                <span class="btn-5-links">
              <a>
                <i class="fa-brands fa-twitter"></i>
              </a>
              <a>
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a>
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </span>
            </button>
        </div>
        <div>
            <p>6</p>
            <div class="btn-6">
                <a class="btn-content" href="#">
                    <span class="btn-title">Next</span>
                    <span class="icon-arrow">
                <svg
                    width="50px"
                    height="43px"
                    viewBox="0 0 66 43"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <g
                      id="arrow"
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                  >
                    <path
                        id="arrow-icon-one"
                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                        fill="#FFFFFF"
                    ></path>
                    <path
                        id="arrow-icon-two"
                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                        fill="#FFFFFF"
                    ></path>
                    <path
                        id="arrow-icon-three"
                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                        fill="#FFFFFF"
                    ></path>
                  </g>
                </svg>
              </span>
                </a>
            </div>
        </div>
    </div>
    <h3>Code in comments ⬇️</h3>
</div>
</body>
</html>
