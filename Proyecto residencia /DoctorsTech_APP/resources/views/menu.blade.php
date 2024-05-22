<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #7c3c8c;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-bottom: 30px;
        }

        .header-image {
            width: 50%;
            height: 130px;
            background-image: url('https://www.doctorstech.mx/themes/sns_simen/images/menu2.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin: 0 auto 20px auto;
            
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .boton-personalizado {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 150px;
            height: 100px;
            background-color: #7c3c8c;
            color: #ffffff;
            text-align: center;
            border-radius: 10px;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s, box-shadow 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .boton-personalizado:hover {
            background-color: #09a69e;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .boton-personalizado img {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            transition: opacity 0.3s;
        }

        .boton-personalizado:hover img {
            opacity: 0.3;
        }

        .boton-personalizado span {
            position: absolute;
            bottom: 10px;
        }

        .salir-button {
            width: 120px;
            height: 40px;
            background-color: #ff4d4d;
            color: #ffffff;
            border: none;
            border-radius: 100px;
            margin-top: 30px;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .salir-button:hover {
            background-color: #cc0000;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .footer {
            background-color: #09a69e;
            color: #ffffff;
            padding: 20px;
            width: 100%;
            text-align: center;
            margin-top: auto;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SISTEMA ADMINISTRADOR DE BASE DE DATOS Y GENERADOR DE COTIZACIONES</h1>
        <div class="header-image"></div>
        <h2>REGISTRO Y GENERADOR DE COTIZACIONES</h2>
        <div class="button-container">
            <button class="boton-personalizado" onclick="window.location.href='clientes'">
                <img src="https://cdn-icons-png.flaticon.com/512/2473/2473210.png" alt="Ingresar nuevo médico">
                <span>CLIENTES</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='equipos'">
                <img src="https://cdn-icons-png.flaticon.com/512/9733/9733441.png" alt="Ingresar nuevo equipo">
                <span>EQUIPO</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='cotizacion'">
                <img src="https://cdn-icons-png.flaticon.com/512/684/684240.png" alt="Generar cotización">
                <span>COTIZACIÓN</span>
            </button>
        </div>
        <h2>BASE DE DATOS</h2>
        <div class="button-container">
            <button class="boton-personalizado" onclick="window.location.href='clientesbd'">
                <img src="https://tse1.mm.bing.net/th?id=OIP.T4D_4EH-EpN80Qdic7e0RQHaHa&pid=Api&P=0&h=180" alt="Base de datos de clientes">
                <span>Base de datos de clientes</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='equiposbd'">
                <img src="https://tse1.mm.bing.net/th?id=OIP.BGfH5xzblnfzpgCvFIZHhwHaF7&pid=Api&P=0&h=180" alt="Base de datos de equipos">
                <span>Base de datos de equipos</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='cotizacionbd'">
                <img src="https://tse3.mm.bing.net/th?id=OIP.vsRxSNnpJ3904_gyS0aayAHaHa&pid=Api&P=0&h=180" alt="Base de datos de cotizaciones">
                <span>Base de datos de cotizaciones</span>
            </button>
        </div>
        <h2>PARTE DE MARIO</h2>
        <div class="button-container">
            <button class="boton-personalizado" onclick="window.location.href='entrega1'">
                <img src="data:image/jpeg;base64,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" alt="Entrega de documentos 1">
                <span>Entrega de documentos 1</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='recep'">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxARDRAQEBAPEA8PDw8QEBAQEBAPDw8PFRIXFxYRFRMYHSggGBolGxMTITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy0lHyUvLS0vLS0tNS0tLS0tNy0tLS0tLS0tLS0tLS0uLTAtLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAwUCBAYBBwj/xAA+EAACAQIBBgoHBwQDAAAAAAAAAQIDEQQFEiExQXEGE1FSYXKBkbHBFCIyQoKh0QcVQ1OSsuEjMzSiJLPC/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAQFAQIDBgf/xAA8EQACAQIDBAcGBAUEAwAAAAAAAQIDEQQFEiExQVETMmFxgZGxBiJCocHRM1Lh8BQWNEPxFSNioiRygv/aAAwDAQACEQMRAD8A+4gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGvVx1GMlGVWnGT0KMpxjJvoTZsoSaukYckuJsGpkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1cqYeVShUhCbhOUXmyi7NPXr5Hq7TenJRkm1dGsldWR8oqQak1JNSTaknrTT03PQJpq6ID7T6PwTynx+GWc71KVoT5XzZdq+aZS4ql0dTZuZMpT1RLojHUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Dhxk/i8QqsV6tZaeipHX3qz7y2wNXVDS+HoRK8bO5r8D8dxWLjFu0Ky4t9b3X36PiN8bT1Ur8tv3MUZWlbmfRI1Yt2TKRSRN0szNjAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPHJLW0YuDB1o8pjWjZRZg8SuRmvSIzoZg8S9iRjpDPRmLry5TXWzbQjB1HyvvMamZ0oq+EWDdbDSjFZ04uMoLbdPT8myTg6yp1U29m5nKvDVCyOVw+QcXnKSpZri005SgrNO62lvPG4ezTlfwIUaFS97HeZ1tOo865JbWWe8nePppK8435L3fyOc8ywtPrVF539DToZvciGeV6S1Zz3R+pDnn+DjubfcvvY6LCVGbGDxkaqbimrOzvbyJmBx9PGRcqaats2/o2cqtKVN2ZLVqxgs6Uoxjyyaiu9k45mFDFU5+xUhPqyjLwMtNAmMAAAAAAAAAAAAAAGMpJazDdglcjeIj0s11o2UGYPFciNekNujMHXlu7DXWzOhFTwhynVoUlOEVK8s1uTdoX1Oy1mLtk7BYanWqaZO31OWhwkxOfGUppxUk3BRgk47Ve1wXUssoaGktvO53FKopRUou8ZJNPlTV0YPNyi4tpmRgwGw2krsEM8TBa5Ls0+BDqZjhafWmvDb6HRUpvciGeUI7E38ivqZ9QXUi38v35HRYaXEhnlCWxJd7IFTPqz6kUvn9jqsNHiyGeKm/efZo8CDUzPFT3zfhs9DoqMFwIZNvW29+khznKfWbfe7+p0SS3A0MgAtuD701F1X4nqfZqW2rH/wBX6lfjV1WcJ9uuMXFYPD86pUrNdEIqK/7Jdx7jAR2ykRIczk/skwHGZaoyS0UKdas2tHu5iXfUXcScZO1J9ptJ7D9AFOcgAAAAAAAAAAAAAY1I3TRhq6Mp2ZoNEc7gwAAa+PpQnSnTm0lOLWlrQ9j7HY51K9Okrzkl3ux0oylCanHgfN5wcW4vXFtPejpGSlFSi7pnsItSSaOq4O5Ul6Oqdk3TbV2/delaO9dhUZnmNTCSjGMU7re/sUeOwi6bVzN+eMqP3rblYoamb4up8Vu5EdUILgQyk3rbe93K+dSdR3m2+93OiiluPDQ2AAAAABgAyeXNowlLqpvuVzVyS3s38j4qEJyzpKKcVre256f2eoVqdSbnBpNLemvUrsbXpNK0l5nyP7WMqLEZWkoSzoYelTorkztM5NfrS+E+gYOGmnfmcINON0Xv2KRhTlia0r3qSpYenZarXlPT051PuOOPd9MfE5VasYyUWfYCuMgAAAAAAAAAAAAAAGpioWd+XxONRbbnWD2WITmblXjK08+Uc5pJ6EtGg8hmeMxCxE6etpLls4X4E6jTg4p2NUp97udzncuULVrpe2r6OVaH5Hr8kxClhtMn1Xbw4Fpg6i0WfAnyDRqRnJuMoxcdbVtKejxZFzytRqU4qMk5J8OXH6HPGThJJJ7S7PMkADsMHjkuUlU8FiKnUpyfgcp4ilDrSXmYuqidTyLGz3xS72v1I0syw8eN+5GLrdBOh7M1n15pdyb+xHlm8PhizF1mTKfszQXXnJ91l9yPLN6j6sV6/Y8dRk6nkWCh8N+9v7keWY4iXG3cjHOfKyZTwOGp9SnFeCI8sTVlvk/M8JSSW44t33mFaqoQlOXswi5O2l2SuzKV3Yyld2R8RxeKdWtUqS9upUnNq+lOUm7fOxdxjpSReRjpikfY/s8ye6VDCwatKT42aetSleVnuVl2FTiZ6ptlZKWuvs/dj6QRSaAAAAAAAAAAAAAAAR143i+jSazV0bRdmaRHOxV5SX9TfFHj88hpxV+aX1ROw79w1SnJABghnV0nqsvyGlWoxq1JPar2RTYnMp06jhBLYYuo+UuKWS4Kn8F+9t/p8iBPMMRL4vIxbLCnQpU1aEUu5WI0qk59Zt+J4dTQAAAAAAAAAACwBZcH4XxCfNjJ+Xmay3HfDK8zqDQsAAAAAAAAAAAAAAAAAaFSNm0R5KzO6d0VuVFpi+ho8v7QQ96nPvXoyZhXvRTVcpUYuzqRuvdTzpdyKylleLqK8abtzexebsdJYinHY2YfeV/YpV59OZmLvnY6/wCmaPxasI//AFd+UbmP4i/Vi34fczvfS1ZvWtdug95hqap0YQXBJfI8tWlqqSl2sHc5gAAAAAAAAAAAAAAF1wZh61SXIorvbfkjWRKwq2tnQGhNAAAAAAAAAAAAAAAABq4uOlPlOVRcTpB8CsymvUT5JeKPPZ/C9CMuT9UyZhn7zRRVsXQpSzXKMZPTmxV5O+2yVyjpYPF4qOqKbjuu3s82zvKpSpuz3mH3jf2KNefS4cXHvm0dFliTtUrQj2atT/63NXiPyxb8LepmfQkrKx5Nu7uDIABrVMoUYtxc1nJ2aV20+TQZ0s2UJPgY/eMNiqy6tKo/IzpZnQx6a9lGu98VHxY09o0dqHpNV6qEviqQXhcWXMaY8xxmIf4dKO+pJ+ERsHucxm4h+9QjujOXmh7o9ztHEVnrrpdWlHzbF1yF48vmPQ5PXXrdmZHwiNXYNS5Ifd8ds60t9WfkNQ1vs8jrOC2HUKDtezm7Xbk7LpenXc5Sd2TMN1Wy5NSQAAAAAAAAAAAAAAAACLEr1d2k0mthtB7Srx6vSfRZ/Mpc4hqwcuyz+ZMoO00VFjxfYT7CWpnfCx1V6ceco+qOdd2pyfYzVPp548AAAAHoBi2ARyxNNa5wW+UTNmZ0vkRPKNFfiw7HfwGlmdEuR595UtjlLq06j8jOlmejkPT1spV3upteNhpGjtQ9Lm9VCr8Tpx8xZcxpXM9hWrNq9FRV1durFtLlskYsuZhqPM6Lg3lCUpuhmxUKcJSzlfObzlr72U9DHSrYupRsrR4+RdrCqnhoTvtZ0RZHEAAAAAAAAAAAAAAA1cRlGjT9urCL5Lpy7lpI9XF0KWyc0vE6wo1J9WLZX1+EmGSaTnLR7sH52IFTOsKtzb7l9yRHAV3wt4kmI00pW2xbXdc2xsdeFmlxizWGyaKY8EWZjU1MsMqjqxtJdvpt+hFxsrYefcaGIVW64t00rac9Sbv0WaPpCtxPLLTxIuKrvXWgurSv4yIEs1wUd9Red/QlxwVZ7qbPPRqm3ET+GFOPkcHnuAXxfJ/Y6rLsR+T5/qPQuWtXfx28EjX+YMFz/wCrNv8ATcT+VeY+7qW3Pl1qlR+Zr/MWD5vyM/6biuSPVk6h+XF705eIXtFhG7XfkHluKW3Z5/oSxwlJaqdNboRLq7KvU+ZKopakluSMGLnoAAAAMN2Vwld2LHgbC8q0+ou9tvwR5jI7zqVar4/W7PVZgtEIU1w+lkdSejKwAAAAAAAAAAAAAHkkYauD5nUhmylF64ycXvTsfOqkXCbi+Dseqi9UUzE0MnZZLqZ+Gp9TNfZo8j2WDl0uEj3W+hR146ar7ytPCInGFbUXGQx1Y6D5Jv5W+pBzJ2w78DXZ6/NK/Q4SclvtZeOwpMDS6TERXj5bTUSUryk2ley02R893bEj2e7YhmQ53+wvLkLvkMyHPf6heXIbeQtHnv8AULvkNvIzXqpyvOateyWc3uRKwFLp8VTp24/JbfoRsXU0UZS7DD02WyhWe9Rj4s+lWXM8boXND0itsoP4qsF4XFlzGmPMZ+If4dJb6kn4RD0oWjzYzcRzqEd0Zy80cpV6EOtJLvaN40nLdGT8Dziaz114rq0l5tkaWZ4KO+pHz+x2WErPdTZJTpSUZXqSqNrRdRilusivxudYR0Zxpy95ppWT9bWJWGy+t0sJSjZJpvaXGQMdChSlGak5Sm5eqk9Fklpv0MqMtzTD4Wi4yu23fYi4xdCdad42tYsXwhp8yf8AqvMm/wAx4f8AJL5fcjfwE+aJcHlqFSpGChNOWrU1qud8LndLEVVSjFpvu+5pVwcqcdTaLQuiIAAAAAAAAAAAAfP8vUczF1Vscs5fEr+bPC5nT0Yqa5u/meiwc9VGPl5GgQCSdPwZqXoNc2b7mk/qepyad6DjyZU46NqifNENRWk1yN+J5KtHTUkuTfqd4u6RFW1dpeezcL4qUuUfVorM2l/spdpXcQoZ0s6bbT9qbkluRP8AaTEXVOjzd34bF6s1yaGqUpvuPYwagkkm9dmeTb94v77THMlzIGbrmZuuZ7mS5kBdcxdcxmS5kBdcxdcyeOozRr1KE+kpuz5nCrShVi4zV0e3JjzbGv8AuMjrAYZfAhc4Sx2JlvqS82dVhaK3QXkDhKrOXWk34nVQityR4czYAAyAYAALjg1RvVlPZCNlvf8ACfeei9naGqtKq+Ct4v8AT1IGPnaKjzOlPYFUAAAAAAAAAAAAcfwxo2rQnz4W7Yv+UeUz+narGfNW8v8AJc5ZK8HHk/UoChLIvuCs/wC7HqPx/g9BkcuvHuZXZguqybEr+pLrMocdHTiai/5MUuojWr7D0HsxDbVl3L1KjN5dRd5pYrYuVpdhW5xW6XGTfCOzy3/O5aZVT6PDp89vmSFMTQAAAAAAAAAAAAAAAAADrMhYfMoRe2frvt1fKx73JsP0WFjffLb57vlYpMXU1VX2bCxLUjAAAAAAAAAAAAFBwxo3oRnzJq/VkreOaUme0tVBT5P12fYsMunaq4816HHnkS7LngvL+tNctO/dJfUuskl/uyj2fv1IOPXuJ9pu4z+7Lf5FXmiti6nf9Ec6P4aNKu9J6LIGqODqVnuu35IpsyTqYiNNdnzZpvTU6q+bPJyk5Xk97dz0sUowsiU5GAAAAAAAAAAAAAAAAATYSjxlSMF70kuza+65JwlB160aa4v5cfkc6s9EHI7aKsrLUj6QkkrI8+emQAAAAAAAAAAAAaWWaGfhqsduY2t60r5oiY6l0uHnHs9Np2w89FWMu0+engT0pa8G3/yN8JLwfkW2TP8A8jwf0IeO/C8UWWO/uy7PBELNv6yfh6I4UOoivrPSy2lPoMmiuM/q2/RFdTj0uYN/l+33NOm9E5dL7kebktqR6BrcjPDq0V06e81m9piW8kNTUAAAAAAAAAAAAAAAu+DWHvKVR+76q3vX8rd56b2dw15yrPhsX1/faV2PqbFDxOiPWFYAAAAAAAAAAAAADxoA+b4yjmVZw5k5R7E9B89xNLoqsocmz1FKeuClzRucHn/yY9Kn+1/QmZS7Ypdz9DhjPwX4Frj/AO7Ls8ERc3/q5+HoiNR6iKrEzspPf/BOzh6I0MMvhir99v0I+Vx1SqVecvT/ACa81anGO2VvqUifvNluntbNhHM0BgAAAAAAAAAAAAAAGQdlkvD8XRjHba8us9L+nYfQ8uw38Phow4733vb+hQ16nSVHI2yccQAAAAAAAAAAAAAADh+FVDNxTeypGMu32X+35njc6paMTq/Mk/p9C9y+eqjbka+Qf8qn8f7JHDK/6qHj6M64v8F+Hqi3yg/6kuzwRrjafSZjo5yivOxCUtNBy5JlNidNo8rXcc8xrdLi6k1uTsvDYdsvp9HQiuy/ntEtNRLmq5X7okzdElNDQAAAAAAAAAAAAAAA3ckYfjK8Vsj60ty/mxZ5ThunxUU9y2vw/UjYqpopvt2HYHvykAAAAAAAAAAAAAAAABzfDOheFOpzZOD3SV//AD8zz+f0r04VOTt5/wCCzyydpSjzKLIf+VT3y/ZIpss/qoePoywxf4Mv3xRbZSfrz7PBHapJRzOdR/DeXlHZ87FZNaqChzsvN/YqNdTqr5spH1e8tt0RQ0uUuV2W5GJ7LIS4IlNDUAAAAAAAAAAAAAAA6Xg3hs2m6j1zejqr+bns8gw2ig6r3y9EVGOqap6eRcF+QgAAAAAAAAAAAAAAAAV2X6Gfhaq2qOct8dPkQcypdJhpx7L+W0kYWeitF/vacfkT/Kpb5ftZ5PLP6mHj6Mu8V+FIs8qP15b/ACMY+WmvXfOy9H9CFRjfR2Xf78yojLROXK3byKxrakWL3pEtGNopdBrJ3ZrJ7TM1MAAAAAAAAAAAAAAkoUnOcYrXJpL6nahRlWqRpx3t2NZzUIuT4HbUaajFRWqKSW5H0mlTVOChHclY89KTk22Zm5gAAAAAAAAAAAAAAAAHkldNPU1Zhq+wHCZPo8XjlB+5UnHsSdmeKwlLoscocm16noK09eH1c0jYyxO059F/oQse74qov+X2NMNH3UyulH1YR5Wr+LIie1slLe2bByNAAAAAAAAAAAAAAAC64N4a85VHqgs2PWev5eJ6T2ewuqcq74bF3vf8vUr8fUslBHRnrirAAAAAAAAAAAAAAAAAAABy+UsPm5TpS2VFndqi0/Bd553E0dGZQn+b1SaLWhU1YSS5FZlaV6sly1GuxM85infE1H2sm4dWgu4hzXn32JaN5Fv7p04EhoagAAAAAHpkHja5ULAxdWPKu8zpZmzMXXjy+I0MzpZ56RHpe5GdDGlmVOpd2UZaegaHwMNWVztsm4bi6UYbbXl0yes+h4DDfw1CNPjx73vPP1qnSTcjaJhyAAAAAAAAAAAAAAAAAAABW5YoXdGptpVFfqy9V/PNIOMp3cKn5X8ns+xIw87ao80chOWdVvyJvtZ4Gc9V5Pi7l6lphYkOJgAAAwmpX9VrxZurGU1xPVhqr2y7IM6qlN7oPyZjpIL/ACZxydVfu1n8EkdFhcQ91KXkzV4imuK8yRZFqv8ADqPfoO0cuxj3U2aPF0l8SJYZAq/lW3zX1Oscoxz+G3ivuaPHU+fyJ4cHKvNpre/4O6yLGPfbz/Q0eYU+0nhwcntlTW5NnaPs7WfWmvmzm8wjwTJ4cHVtqPsjbzO8PZuPx1H4L9Tm8wfCJt4XItKElL1pNO6znoT3IsMNkmGoSU9ra2q7+1jhUxlSatuRZluRQAAAAAAAAAAAAAAAAAAAADGpBSi4tXTVmntRrKKknF7mZTad0aiyVQ/Lj82QVlWEX9tHb+Jq/mZmsnUfyofpTN1l2FX9uPkY/iKv5mZLBUlqpU/0R+h0WDw63U4+SNXWqP4n5kioQWqMV8KOqo01uivI1cpPiZpI3SS3Gp6ZAAAAsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/9k=" alt="Recepción de documentos">
                <span>Recepción de documentos</span>
            </button>
            <button class="boton-personalizado" onclick="window.location.href='entrega2'">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8PDw8PDw0PDw8ODg8PEA8PDw0PFREWFhURFRUYHiggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGCsdHx8tKysrKy0rLS0rLSstLS0tLS0tLS0tLS0tKy0tLS0rLS0tLSstLS0tLS0tLS0tLS0tLf/AABEIAKoBKQMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQUCAwYEB//EAEsQAAEDAQQECAoGCAQHAAAAAAEAAgMRBAUSIRMxQXEGMlFSU2GR0RQiM3KBkqGxweEVQqKjsvAHFiM1Y3OT0iRis8I0Q1R0goPx/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECAwQFBv/EADcRAQACAQEGAggGAQMFAAAAAAABAhEDBBIhMUFREzIFFCJSYXGBoTORscHR4fAVQvEjU2Jygv/aAAwDAQACEQMRAD8A+0lYrMSgKRCAgICAgICAgICAgICAgICAgIIQEBECJQiBAQEBAQFIICAgVQKoFUG4qqzBARAgICAgICAgICAgUQKIFEBAogUQEBBCkEEICAgIIQEBAQEQICkQgICCUG0qqyEEIgQSgICJEBEMJZWtzc5rRyuIaPapJmI5smkEVBBB1EZgqBKAgnCiTCgUQMKBhQMKBhQMKCMKCCEQhSCAghAQEBBCAgICIEEKRKAg3FVWYoCIEBAQESICDnr7mOE/xJXscduBlKNHIK5rWsOTVmcOZ/RjwiltE9pjld+yLWSQx0AERxEEA9YIrXaFprUiIiYNntiZh9HXM6mYCJSgICAgICAgICAoHkMoa/Rnbmw8vVv1qYRPBtQSghSCAghAQEBBCAiBSCAoS3FQligIgRIgICAg814W+OzsxyOo30VOVTr95UxWZ5KXvFIzLn5LfBaLPBOGyaOZ8krB4mIB2E50NNuwrSImJw5r2rMZ+bjOAMlkMsvg7J2O0QxGUtILcQ1UJzW2pvY4s6vp132ou8V3GAyPKOvrXNaHXp3zwlYqjVpdCSSevnyfAqyu6jQH8vl70ybpoD+Xy96ZN08HP5fL3obpoD+Xy96ZRumgP5fL3plO6aA/l8vemTdNAfy+XvTJup0B/L5e9Mo3WcUZFe9x95UStEYVV88cbm/FKeZTW8n1em77QXgg620z5fzRWmEadsw9gFVVo1TTMbrc2taULgFS1pjlGVoiOs4GyA/nJRXVieE8EzSejNaqCCEBAQQgIgQFIlBsKqsgoCAgICCUBBwf6XiRYXUNPFIy65YgujZvM5Nq6fVY3jE1kMLGNDWMlma1rQA1rQWgADYFSsq6scPrL5/+i/y8/wDJb+MLo1uSlH1K7vKDcVzW5N9PzLtZOl4pTFiNWEmpqanM9qvGWU7ueTDFF0Z9Y96cUez2MUXMPrHvTiez2boIo31oylOs96iZmFq1rPRUvvizgkaF+RI1/NX3Z7sfFp2Y/TVn6F/rfNN2e54tOx9NWfoX+sO9N2e54tOx9M2foX+sO9N2e54tOx9M2foX+sO9N2e54tOywui3Ryl4jY5haATU1rWvWq2iYaaV62ziGm+eONzfiq08y2t5PqzujW//AMfir2U0urZeVrjY17pZWwWaLCJZXuDG1cQGtxHVmQPTRZYm04h0ZisZlNtssQjFGNpiGevKh2q1IxLLW414uetNrw6aKzTNMrRR8YcHOhcRUVH1SRWnyVtTS3ozMK7Nq109WN7jXPGHo4H3yZY9FKSXxkNa8mpc08UHryI9CzpOYel6R0q6WrExwi369XSK7iEEICAgIIQEQINxULMUBAQEBAQSg4L9MH/Au3D/AFol0bN5nJtXOFlep/Zs/n2j3hcM6lo5S9zR2LR1LYtHSJ5zznm5jgXd8UUkpjaQTGAauc7LF1ldFNW9+FpYekti0NnpWdOMZnvM/q7m7vKegq1uTzNLzLtZulWzcd28q0MLc1JeF6lwwRVZGW0fkA55IzqeTYrxXuwtqZ4Q8lx2xwtT7OSSx9n07QdTHMkDHU3h7cv8vWVa0ezk0544dfYNTt4WNnVRRycHJC5x0kdCSfrcu5X34YTs855o/VqTpI/tdyeJCPV7d0fq3J0kf2u5PEhPq9k/q3L0kf2u5PEg9Xt3R+rcnSR/a7k8SD1ayyuW7HQF5c5rsQaBhrsJVbWiWulpTTOWF88cbm/FVp5ltbyfVsufW/c34q9lNHq9L7LHKyaGVjXxyFwkY4VD2uA1/nYs6zMTmG9oiYxLh7fZLzsEfgFm/a2SRw8Dtchq67o6HHFJzqDidmdKDprNLTvTz6x3cl62pG7HLp8Gy7rviskWBlTrfLK/N8r9bpHHaVFrZ4yyis2mK15y0cFwSZn6gcI9OZ/O9c+j1l9B6ZmIjTp1jP7O6sM2NgrrGR6+tXmHl0tmG9QuIIQEBBCAiBBuKhZigICCUBBCCUHBfpg/4F24f60S6dm8zk2rnCyvTybP59o94Xm25Pp9k80/+tVDwW48nmD3rfR5y5/TP4dfn+zsLu4/oK2tyeFp+ZdrJ0q2bjO3lXhhPNy9rhLHub1mnWDqWsOW0YnDDgvCZLVabT/y2MbY4nbHkOL5SOoOwtrytPIpvwiIX0o5y7OwanbwsLOujS6x2QkktjqSSc9vapzZXd02Xg9mwGOkejcQXNrkSNR9irMTPNppakaU5pOJahd1i5kXae9V8OOzo9e1ffewSRBuCrMGHBhqKYaUp2Kd1hOrx3s8Xj+j7FzIu096jw47N/XtX33psVngZi0LWCtMWE13Ju46KX176vmtnDw3zxxub8Vanmc+t5PqzunW/c34q9lNLq8t6W2eCfSUBhIDQBkCNdHHY6taf/VzXm1Zz0ezs2jo62luZxb/ADl8HmvnhBA6EZPacYyLQfqu2gq9NWrHW9F69uFcT9XMWi2SWk6KFhDTxq6yOs7Apteb8Ib6GxaWxR42tbMxy/rvLoLusYhjDBntcec46z+eRa1ruxh4+1bRbaNSbz9PhC8urU7ePclkaXV7lRqKQQQgIIKIEBBtKhZCAgIJQEBAQcxw84PS3hCyKORjGYv24c1znmPE11WEHjAt1EZ12bddLUik5Ya2nv4+DVeBrEw8s9oPtC4rw+h2Oczn/wAa/oouC/Hf5g9620ebH01+HX5/s7C7eONxW1uTwtPzLtZOlWzDxnkkNa0kuccgArsZjjLm+Edn8Nhe2K0vs+jkipKyMOdKxwcHNIJBA269gyVt/wAPjMZNHR9ZtNazyUtj4eQQTvscsOjggkdZ2TRcUBji0l0YGQqNba7lr4UzG8x34icPot2va5uJpDmuwua5pBDmkVBBGsLns6dPkwdaW1P7WzDM63CvpzVd6O7TwdWf9v2k8Kb0tl9Yd6nejunwNb3ftLbR9MVYcNK1oaU5a11JmGe7bOMNPhTelsvrDvTer3aeBre7P5SnwpvS2X1h3pvR3R4Gt7v2lvssodWjonUp5M1pvzUZieRuXr5ox9FdfPHG5vxU08zLW8n1Z3Rrfub8Veyml1WD2BwIcAQciDqKq2fKb1uGYG14LTM/xnus0WINDHYzVpLq1FMhqW8V05xmsMPXNormI1J/NecEo3CxQCQOElH48dceLSO11zqloiJ4Mpva/G0zM/FdtaSQAKk6gqJiMrqyw4GgbdZ3rOZdNa4htRYQEEICCEBEJQbCoWQgICCUBAQEBBy988Uf9xafe1c93tbHz/8AmrnuC3Hf5g9620ecsvTX4dfn+zsLt8oNxW1uTwdPzLtZOlW3rdr5gGteGtxOc4EE4nHV2BXrbDHU0ptylXt4OyAECVlDTItdszCjUnfjDbYs7PqTeePDDipP0T2lzi51thLnEucdE/NxNSda6fWIjo5fV57u64GXJNYLN4PLM2fDI4xua1zcEZocGZ52I+nqWGpeLTmIbadJrGJWTrLmf2Vn17WZ+5UxVr4ut0t95PBP4Vn9T5Jip4ut733ltwyUpSKlKU8alOSnInBTN85avBP4Vn9T5JivZp4ut733k8F/hWf1PkmK9keLre995brPFhr4sba04gpXeoxHQ3r2805Vl88cbm/FTTzMtbyfVndOt+5vxV7KaXVYqjZSXhclXOkY45kuLKV166H4LSLufU0esNFni4rRygdamWdY6L2GztZxR6dZWeXVFYjk2oshQCApEICCEBBKDaoShBCAgIJQEBAQcfe05L3x0yZNK4HlxEZexc1544fQbLp4rF884j7Kbgtx3+YPet9Hm5PTP4dfn+zsbt8p6Ctrcng6fmXSydKvmfFidV01amtNJSvUrxllM1z1+7DSQ8+f7zuTijNe8/cxw8+f7zuTiZr3n7mkh58/3ncnEzX4/dOkh58/3ncnEzXvP3NJDz5/vO5OJmvefuaSHnz/AHncnEzX4/c0kPPn+87k4ma/H7mkh50/3ncnEzX4/dvs0jAHPBfh1ePizPUComFqzERl57TJE81LXHVnWimK4nKtrxMYwmCVjK4WOz1+NVJiZRW9Y5Q2+GjmntTC3ix2R4cOYe1MHix2QLWytdHny5VTCPEjsnw5vNPam6eLDzQX3C+0myHEyfRiVjX0wzR5guYRrIINQaHKuYzUzSYjKa6kTOFkqNBSCCEBBCAgINxUJQghAQEEoCAgIOKvHy838x/4iuW3OX0ez/g1+UKvgt5R/mD3rfR5uH0z+HX5/s7G7uONxW9uTwdPzLpZOl536epo6LDXKodWnWrcFJ3+mGNLRzoex6cEe38Clo50PY9OB7fwKWjnQ9j04Ht/ApaOdD2PTge38D/Ec6HsenA9v4H+I50PY9OB7fwP8Rzoex6cD2/gh3hHOh7HJwPb+Cvtsz2tcXEOLRWjSQ0nZuV4iGN5nq5+a0veauOVcmioa3q696vhhMzLCNr3kNbUuNaAHXQVUTMRxkrE2nEPRZ7BM9wbhe0bXODmgD061S2rWsZy0po3tOMYbLddssbjhD3sPFIq47iBtUaetW0ceErauhas8OMPHKx7CA4OaSK0ORpuWkWieTG1ZrzIrQ9hq13oOYPUQpwiJmFLeVvP0zd8lAHNY1tK1FC6UHPc4haRHsTC0W9qJfUIJmvbib6RtB5CuWYw7q2iYy2KEoUgghBBQEQlEtpUJYoCAgIJQEBAQcVePl5v5j/xLltzl9Js/wCDX5Qq+C/lH+YPet9HnLg9Nfh1+f7Owu7yg3Fb25PB0/Mu1k6XkexlTWF5NTUgZHr1q3HuzmIzyY6OPoH9nzU8e6MR2To2dA/s+aZnuYjsjRx9A/s+aZnuYjsnAzoH9nzTM9zEdjAzoH9nzUZnuYjsYGdA/s+aZnunEdkYGdA/s+ace5iOzGSOOnkH9nzU8e6MR2Vl4ACN9GlgpxTrGavDC+OnBRMYXEACpOQA2q0zERmWMRMziF1dVgdEdJIPGphYwULiT8fmuTW1Yt7NXfs2zzWd6y5ZZnnNz8H+Vgaab3EGvoA9KrGlHV1TqVjlGfm8kj3NJOOoFah4bSg6wBTfmrzoRPJjG0Rn2q/kp7a3TkyMpWtKdXIqad50rTW6NXSjXrFtOc4VsjC00IoV21tFozDzrUtWcWjDm7y/eth3M/G9a18korzfQ7LMWGo9I2ELCYy3raYXjHVAI1EArN0xxSiUICCEBEJRLaVCWKAgICAglAQEHFXj5eb+Y/8AEuW3OX0mz/hV+UKvgv5R/mD3ro0ecuD01+HX5/s7C7fKDcVtbk8HS8y7WTpaix9TSSg2DAMlOYVmJ7sPGxYdM3GBiw4W4sNaVpXUmYTuXxnp8mejf0n2ApzCMT3NG/pPsBRmDE9zRv6T7ATMGJ7so2uHGdi9AFETET1ZucAKkgDaTkFCVa6+o/qsle3nNYae1X3JY+NXpxeyK0MkbiY4OHtG8bFGMNItFozCovjiyeaPgr1c+rzlSWCFz5GBtahwcTzQDrTUtEVnLPSrNrxh1tmbV5J1MADepxzJ7MPaVyaUdXq6k4rEd1bYb6ImdDNQjSOYyTIEUcQA7q61NdTjiXZrbFE6camn2iZj+FDwqvcte6CPWCTI7kOxvxWttTHCGGxejY1o39Xy9I7/ANM7teQ4DnD2gV702muaZ7PO2S+Naa9Jyxt7CHkn62Y68lbZ7RNIiOjPa6TXUmZ6uUvP962Hcz8b1118kuaObv2rBqvLNxG+aPcs5dVeTaiyEBBCIEEoltKhLFAQEQIkQEBAQc5bLllfLI4OhAc9zgC8ggE7RRYzp2mcvW0vSGlTTis54R8P5U1y3e+F7i4sIc0AYCTt6wFvp0ms8XD6Q27S2ita0zwnr/y6W7fKDcVe3J52l5l0snSlBXWOMmeaTY0lgPKS1lR6MDfSSqxzmXVq2xpVr34/r/MvVFa2OeWNJLhi+qcJwkB1DqNCQFMTDG2latd6f8zyZSTsa0vc5oYMi6ooDWmvfkpzCK0tad2I4tiKJQV1/E6B1K0JaHUrxSc9SvTmy1vI87QAABkBkKaqKWcIu7KeUDi4GOdroHn2VISeSdPzSwvjiSbh8FNVdXqprutronADNjnAOb7KjrUaunFo+KujqzS2Ojq7K6j3N5wDh1kZOHZh9q5dGej09SM1ie3+fyor8up4kdIxpcx5xGmZa468uTal6TnMPS2Ta6bkUvOJhyTbI98jnPDgC9znF1QXGtTr5VemnNp4p2v0ho6Gnu6cxNsYiI6f8L2wMq+uxoPtyV9ptimO753YqTOpnsrb6t73PdGDhYw0oMi4jaSr7NpVisW6yrtmva15p0hzs0xfedhLtYwCvL4711/7Jc1Ob6K1c7ZeWXiN80e5ZzzdVeUNqLIQEEIgUiaqBtKhZigIgRIgICAgIKi33kY6HRxurJIzMZ+LTOvpV61y576mOjiOCPCZ9tkex0UcYZGH1YXEk1ApnvWttLc45yy397ph212+UG4rKzTT5rtZulotLZXENY5rGkeM/Nzx1Nbq9J7FE5a0mkcbRme3T6/x92qOwua0NZPI1o1eLEXcpzLdfWVGPitbWi05tSJn6/ywhuzBUNleGuPjGjdIRUmmOlQMzqprTdwtfad7Gaxw/L8kPuyrDCJKWcmuDAC9oxYqB9dVeqqbvDHRMbTi3iY9rvnh25f22izSjITmgyFYoyaKcT3U8TTnnT7yeDzf9Qf6UajE9zxNP3PvL0SRBzS13jAih2V7NStE4YWiJ4Kz6Ie3Jk5DNmJjXFuXL2LTfjsw8GY5S9dmsbYWkCpJJLnuzc49fsVZnLStIrCsvjiybh8FerDV6ufjfhc11AS0ggHVUK8xmMOes4nK8u+8NMcDxhkHjMczLMcldvsIquPU0tz2qvS2fad6cWj+3teZSfG8fkLSB9k6valdeOq99DPGs/n/AF/ShdY3FzqkAYj1nWr22qsRw4ueuxXmeM4a7fbBZ2taxoL3Z56gOU8qz09OdeZtaeDbV1a7NWK0jjLn7TMZHl7gAXUrhBA1UXfSsUriHlal51Lb09VOf3nYt7fxOWn+2U05vpTVztl3ZuI3zR7lnLqryhtRZCAghECkSg2lVWYoCIESICAgICDlr7kIkMZGTZHSA8uMNK2ryy4taeOHC/otgNbTJTINijB5T4xPub2rfWnkpR9Lu7yg3Fc1uTfT8y7WTpeCe+rOyox4iMqMBd7dXtURaJnDa2hqVpOpauIgkvNo2xDqfMwH7OJabrknVj/JavpdvPgG50jv9oU7ivjR3hhNfTQ0kPicQKho0gJ6tSbiJ1+HR4W8J3kA6JmY5zlPhwp6xPY/WZ/RM9ZyeHCfWJ7H6zv6JnrFNyD1iex+sz+iZ6xTcg9Ynsh/CR9PJN9ZybiPWJ7DLQbTCX0DXPDhSpIBBoPcpxiUb2/GVNIxzSWuFHDXtB6wdoV2MxhMEzmODmmjhWhyNKinxVbVi0YlNbTWcw9VnvSVrqlxcNrXGoI+CpbRpMYxhpXaLxOc5Vt73lIZCGOLWawBkTXaU0tnpEcYzK2ttd7W9mcQrbRaHyEF5xEDDXLVUn4ratIpGKue+pa85tOWsVOQFScgFZSFfLGRelhBpWjTlmOM9WjySvXm+jtXO2Xdm4jfNHuWcuqvKG1FkICCEQKRKhLaVCWKAiBEiAgICAg5jhgWxYZ3nDHTA91CQ1wqQTTVlXPqWunx4OTaK8cqHgFd5gsTMTcL5XGZwqDkaBv2WtPpWmrbNmdIxDrbu8oNxWM8m2n5ltJO1gq40HLQkexUw6JtEc3O3ndFllDtHaJbO91SDHVzQa81wNPRRK03bZw1vt1r6U6dpzE/m5G1cG7e2ujvMOGdNJEY8t4xLo8SOtfu8+NGLTits/RVyXRfA1WuF/myj/cwK3jaX+f8rep6/uz+U/w87rFfY+sXbprL8SFPi6PdHqmv7k/lP8NQst9U+vq6ayf3J4mj3hPqmv8A9u35NbWXwXiMaUvOYbpINXLrpsSNTRnlP6ramw7Rp13r0xHzj+W76Pv3mzf1bN/crZ03LuyeAX7zZv6tm/uTOmnEngF+82b+rZv7kzpmJXXB203vZcTJrG60ROOIVmga+M7aHEajqPaq2ik8pWrmF2++7Udd0zO3z2Q+9ypuR7yc/Brde9op+5pP61j71O7Hvfqj6Ox8Di6KP1G9y8zfv3l6fh07QrLXZYS8kRxEUGYYzuUWvqVnEzK9NPStGYiJ+jnL6ErJcMNgMzMLTjY+zxtrnUUcQV3bNO9TNrPP2ukRqezHR4NLbRxbskH/AL7KP9y6MV979XNiezfcdxTOtPhtsDWyNbgghY7EIhQirnaifGdq5SeSi1oxu1WirqwsV13ZeI3zW+5Zy6q8obUWQgIIRAglBtKhZiUEIhKJEQIkQEBB473uyG1wvs87S6KSmINc5hyNcnNzGpWraazmFbVi0YlWz2UxHDTxdTSNVORWicue1N2W67fKegqJ5J0/MtyARQ5g6xyqroeU3dEdhG4lTvSp4VWua6YnNLTiocsnEHtUTOYxK+l/07xevCYUto4OBhyfO5uwh9SN+SrGlR129J7RE8o/L+2j6EHOtHrfJT4NFf8AVdo7R+X9p+hBzrR63yTwaH+q7R2j8v7brHdbYiS1jy92Re6rnEclVeta15OXaNq1tfhfl26PVonc13YVbLmxJoXc09hTJieyNE7mu7CmUbs9jQu5ruwpkxPY0Tua7sKZTiTRO5ruwplGJ7Ntpke7WC1vJQgenlWdNOK/Nrqalrc+ENCtakWjEqUvak5iRRp03IwnV1N+cshGTqaSOoFXUxJonc13YUyYlmyB5NA0+kEBMpisyuIm0AHIAFm6YjEMkSIIRApBBKgbSoWYoIRAiUoCAghEJRIgwkjDgQRUFSiYieEtdnsrWVpWp2nMpM5VrSK8m5QslBCAgiiBRAopCiBRAogUQKBAooGL4w4EEZHJSiYzDzWWxBpq6jnbOQde9TNlK6eOMlpsQcQRka+N1jad6RJamXpDQMqZbFC6aIkQEBAQQiBSCCVA2FQshARCEBAQEBAQEBEiIEBAQQglBCAgICApBQCAgKQQEEICAgICAghECkFAlEthUJEBECCEBAQEBAQESIgQEEFARIiBAQEBAUgoEKQQEAoAQEBACAgICCEAIhCkZKB//9k=" alt="Entrega de documentos 2">
                <span>Entrega de documentos 2</span>
            </button>
        </div>
        <button class="salir-button" onclick="window.location.href='login'">Salir</button>
    </div>
    <div class="footer">
        <p>Términos y Condiciones  |  Desarrollada por el Ing. Flavio Abraham Castillo Cruz y el Ing Mario A. Carrasquedo Marquez  |  DoctorsTech SA de CV</p>
    </div>
</body>
</html>
