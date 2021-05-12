@extends('layouts.app')
@section('mytitle', $title)
@section('content')

<div class="row">
    <div class="col-md-12">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('accessories')}}">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('laptops')}}">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('screens')}}">Screens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mobiles')}}">Mobiles</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3" >
            <h5 style="padding-top:10px; margin-top:20px;"> Search Products</h5>
            <hr>
            <div style="border-right:1px solid #ccc; padding-right:10px">
                <div class="form-group">
                    <h6>Price</h6>
                    <hr>
                    <label>From</label>
                    <input type="number" min="0" class="form-control" placeholder="0" name="pfrom">
                    <label>To</label>
                    <input type="number" min="0" class="form-control" placeholder="0" name="pto">
                </div>
                <div class="form-group">
                    <h6>Sort</h6>
                    <hr>
                    <select class="form-control" name="sortp">
                        <option value="1">Hight to Low</option>
                        <option value="2">Low to High</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6>Location</h6>
                    <hr>
                    <select class="form-control" name="state">
                        <option value="1">Select State</option>
                    </select>
                    <select class="form-control" name="city">
                        <option value="1">Select City</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6 style="margin-top:10px">Post Duration</h6>
                    <hr>
                    <select class="form-control" name="duration">
                        <option value="1">Newly Posted</option>
                        <option value="2">Ending Soon</option>
                    </select>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-block btn-primary bg-dark"> Submit </button>
                </div>

            </div>
        </div>
        <div class="col-sm-9">
            <h5 style="padding-top:10px; margin-top:20px;"> Search Results</h5>
            <hr>
            <?php for($i=1;$i<=5;$i++){?>
                <div class="row" style="padding-bottom:10px">

                    <div class="col-sm-4">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRUZGBgZGBkcHBkcHBgZGhocGhgaHBgYGRgcIS4lHB4rHxoYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHBISHTQmJSQ0NDQ0NDY0NDQ1NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0PTQ0MTQxNDQ0NjQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAgMEBQYBB//EAEMQAAIBAgIGBwYCCQQBBQEAAAECAAMRBCEFEjFBUWEGE3GBkaGxIjJCUsHwctEHFWKCkqKywuEUI9LxUzNDRMPiJP/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACcRAAICAQQCAgICAwAAAAAAAAABAhEDEiExQQRREyIyYXGRFIGx/9oADAMBAAIRAxEAPwDXQhCecd4QhCABMtpvSTl2p5qqm1vmPE8uA7JqZTdIdGdYmunvoP4lGZHaNo7xviZUGk9zOrU5yVhnAuWPZt8rbTKnrPGTNGn2jfM228OzhFZ1UWKpe7W1ct+Z8B/mc0DSFTEM97imoyII9pvdNjyBPhFVK1lPZ3bY90PfWFc6wJ6wDZYgaikX5e0bd8qJnk2iaOEIQOcIQhAAhCFowCEIRAEJW/rdWYrTGvbab6q9xsSfCPUceCwRhqMdgJBDfhbjyNorK0uromSoxnSHD02Ks5JXJtVWYKeBIyvyFzLSqDqtq5NY27bZec8V0npAg6liliQybwwyIbneXGLlwK0uT2jC4lKiK6MHRhcMNh/I8o7Mj+jim4wzM4IV6hZAd41VBYciR5TXRNU6EEIQiAIQhAAhCEACEIQAIQhAAhCEACEIQAIQhAAnGFxY752EAMl0m0VqHrkHsk+2ODH4+wnbz7cqnR7kv5EXtPQXQMCrAEEEEHYQdoM8/wBPaOfDPrLfUY+w22x+RufqO+yas3hPplhigQp5R3ofif8Adqp7NmRXFveupKNfPMZrI+A0mlRdR7B7ZcD2H6SHTrmhWSoDdUJDAbSjWDAceNuIES2ZpNao7HoMJwHeJ2UcgQhEu4AJOwC57owMJpdy9eoQL2YrtHw+zvPLzkdRVGwOOxh/yjuGJYFjtZiT4ybTWdNtbFx8aMoqTbtkBauIGxqvcz/QzpxeJsResQRY3DkEd4lzSWS0El5P0N+IupMyIr1F2Ar+4B/bENpF7gsRcZi4AsRsItaa2s8i0TrVEXi4HdfPyvI+RdpB/jS6kysXpdX4of3fyMjV9Nio+vUw2GdvmZCSbbATrZ8rz0lqCH3kU9qg+ojTaJottw9JtvwJuFzu4RLNH0YvDJdmLTpo4FupSw3BmXw2xwdOTvw47n//ABNQ2gcKduGp9yAekbforg220B3O6+jCL5sXaE8WRdmeXp0m+gw7HU/QRxenVHfSqd2of7hLZ+heC/8AG47Kjn+pjIlXoPhTsNUdjqfVTJebCuUw0ZfYynTfDHatQdqqfRo8vTLCn43HajfS8dp/oyosL9dWXl7Bt/IIir+ixPhxTj8VNW9HE0i8Mle5m5TQtOluEP8A71u1Kg/tjydI8Kf/AJCd9x6iVbfoscbMWh7aTL/eYw/6McQPdr0j266+imOsXsWufo1OExtOoCabo4G3VYG3bbZGdN1aiUXakpZwAQovci41gts72vsz4TP/AKPqOqlZr3BdVuNh1Axv/MJrpE4qMqRtCTkrMx0JrYl0qHEa+rrLqa4YPsOv72er7u3nNPImPxopgbCzGygnVGQuSTuAH0lDhelqmqtNwtnYIHQmwYmy3B2qTv57JLds00urNTCEIiQhE60NaAxUInWhrQAVEu4UXYgDiTYeJjGOxi0kao+xRft3ADmTYd8xH64Lvr1D2LuXko+sG6KjHUzdU8UjGyujHgGUnwBncRQV1KOoZWFip2GZj9b0GWzAeAkrQmmAX6oklT7jHMjfqk7xbZEmVLHStGU6UaBbDHXW70Scn2shOxX5cG7jY5mto6V2B8x82+3PjPW3AYFWAIIIIOYIO0EbxPPukPQVgS+DIsczRY2t+BjlbkfHdNVplszLVKLtGs6L6RFagM7sh1Sdtx8J8Mu0GXMyfQTQT4am7Vrq9Qj2LghFTW1cxlrG5PZbnNVrSGqdBd7ipB03V1MPUb9gjvb2R6yZrSj6W1P9gJ87qvqfUCOKuSQpcFFhUsq9gk2msaprJVNZ0yR2R2SQ/TWPtsiKaztYzGSLIWJqTnR8a2IH7Ks39v8AdI2MeTeiaZ1H/Co8yf7ZEuCn+Jqi0BWsLao7c7i/ke+MPiDsvOdeeUwbSM9DfI8HnTVtIjYoAZgSGKzOwVQWY7AJlJlLH7LI4gk2XMnYBvlzgMDq+03venIc+cTorRgpi7Zsdp3DkvLnvllHDH3I482VP6x4CBM4TEkzVujA6TIGmcV1eHrVPkpVG7whI87SYTMz+kPE6mAq22uUQfvOut/KGkxdyS9sHsmUvQmhqYNP22dvPVH9Ev5C0TS1MPRT5aaeJXWPmxkvWnTN3JlwVRRR9LNGPWpqaVi6EkKSBrggawBOQOQIvlMnofoniHrI1VDTRHVm1iCSVINgAcybbdg8pucVpikj6jElt4UXtfjHKmkFABAJvxuPGTdGtSaqibCUraYP7PifznYrQ/jkWHWQ6yROsnesgTRK6yHWSL1kOsgBV9Mm/wD5hw6ynrdha3qVmK0nXRWsuyeg46gtWm9N/ddSDxHAjmDY9088raNZHNOtk3wt8Ljip+m0SlQ43wuyEmJN5cYCuVemRt10t264kRMGoOUt+jGjC7is4Oohul/iYbGHIceUTaZdOK3N/rznWSJ1kOsiM6JfWQ6yResh1kAJXWTO9JamtVoJuGu58tX0MuOsmexT6+Kf9hFXvb2vqZrgVyIl0v2P01kumkFwpBUCza17atzs2jZfKSlwrgEkbNtiDbO2djlnOuSOmMkcQSPiWkptkgYppzyRrEqca8vOjiatAH52ZvPVH9MzmNbbNPhTqIifKig9thred5hkdI1Ssms8j1cTaRsRigIxg8O9d9VBc7zuUcWM5Ga6VWqWyQ9S16rBEF2PgBvJO4TbaI0StBfmY+83HkOCxWiNFJQXVGZPvMdrH6DgJYGVGN7s8zyPJ1/WOy/6cM4TBjEEy3I5gJiSZwmcJmUpDOkzDfpOqayYagDnUr3txCLq+tQTakzAdL6gfSWFp/8AjQuf3mY//WJXjfbKv1bJk9qLxn3DYMh2DZOdZIvWQ6ydLZvRiMQz0sS6vmS5YG+0MSVPgbdo5S3TG64HxsCcshtztly8pF6WYGzCuu8gP3CwPoO6cwFMsAQt7jjY926TI3xvYsetf5F8f8Qkbq/2W+++ERobCphkfZ7LcRs7xK7E4d094ZfMMx/jvktawkhK3fN3FM4FJoo+sneslpX0cj5r7B5Zr/Du7pX1NHOuxQ4/ZP0OczcZLotSTGusiayK41XUMvBgCPAxtmsbEMpG61rQuD8XkZGoobTR9JTcIvmR4HKS9cRoJwIPfA0n+WGpexjvWw62RmDDaCO6cLx2FEnrIdZI2tAPCwok9ZKfRKl6lVxtaoQLkC4UZZnLfJdWsFVm4AnwF4z0bpAUVLb9Y95bI7R8I9J1+JG22Zy2kjQKLulwABbWUWKgqSxAOfwkE57SeFgAWUDe3tN2fCP7u8cIlcINzX+vZY8M49Sw5IvyJ/ITpkjSLQxUlZijLWtT9m9x93/KVOKnLM6IsqjT13VdzOoPYSLyZW0hck8ST4yMuRZvlRz3kai/zMsd0BoZ8S1h7KKfafcP2V4ty3b+fNkOqDik5SeyJOisDUxD6qZAe8x91R9TwH/c9J0VoxKKBVGW0k7WPzMYvRmjkpIERdUDxJ3sx3kyY0xUbds83yfLeV0tkjhMQxnWMaZo5M5UDGIJnGaIJmMpDs6TEkxJM4TMWS5HS082xVXX0riX3U0VB/CgPmXno955VoOprviq179ZXYg8tZm+onX4i/KXpV/YR+0kjQGqZzrJG1pzXmx10Kx6a9N0sCSptf5rXXztKfo4PYF3NwTca2W35d223hLcPKHo9Ya4VSVFVgG9m9wQL2J2cxwg+DTH+Roam07fvvhG6pFzt8JyRZuPpiQd8fStwMyCPXTahP4bN5DOPJpjVyYFTzBHrOjng8/g16Y4jbJCYsGZSnpMHYZIo47PbDcDU4jDpWXVY2b4XFrjlntHL0mV0lg8TRuSgqIPjQHL8SZlfTnLnC4q4llRxXHxj0xfJKlKPBgRpsD3kI++do/S00m5ivj6ibTE6Op1bm1mPxLbzGxvXnM9j+jgUkmmrL8yj1AzHpzkShXRpGd9jFLTIOyoOy4PrJS6RJ2hG7R+Up6uhqR2Ar2MfQ3hQ0Oi5jXPPWPoLCYuEC6fouxikO2mO4lZ3Wonbrr4GQ1QCA+7ydC6b/sdCNPaiYd2R7mwGqQQfaYA+RJk/R+E1aaLceyoFiQDkovtlHpka3VU/nqqD+EbfUTVYatYWsdudiOe4i2+ep4UWoN3ZzzlUgWiwF7dtiDv5dkfRyBkfvZG1qXGYXtCgHyirzeSLjIbqubW3SrxMsqsr6qEmwBJO4ZzjmjWMxvRmjTXYoMgzKGbgouzEc7ooHNhPS9H4JKaKqqFVRYKPU8Tz3yi6MaOampZxYsSbb7ZAX4bPOaLXnLLdmObM5bLhDpaJZo2XjbPM2zFC2aNM8S7xovMZNichZaILRJeILTNozcxwtE3iYQ0kOZE0viuroVanyU3bvVCR5zzno7T1MMn7RZvPV/tmu6fYjUwFW219RP4nXW/lDTPYSlq06a/Ki+JGsfMzswrTib9s38f7SscvOa07snCYztOO9gTwBJ7pW6F19UMQF1iTq2OVzsvfbaP6UxASm1/iGqNxzyvlwHCd0HhwAp1ALKPaNrnIZ8c+cHwaY+Sff7y/KEm/wCiXn4mEVGtmRD4kfCDn+z/AMol3xRFtRbdiHyLTWJo649hwfA+YnH0bU3BW78/OJZo/o5P9mJ/0GIvfq/AoB3ZxytRrUxrOhtxuDbtsTaa18I42o3hcDvEYYA3BzGw7xvyN5ost/sWhdFZozSXsgEy/wANjQd8zuM0IbF6CsQMyou1uPhKulj3TImaqmrRDrhnpNHEcDLGjigdu3jMFgNOLvMu6GkVb3TKTolxL/FaNR8yLH5ly8d3jKutoJ7+yQwJ2+6R2g/S8sMDWOrcGS/9QMhbjFKEZCUpR4KT9Tqn/qVUXltPnY+UTfCpsDue8Dzt9ZPx+EFRTs1xsbjnsbiPSVVHRNZ8tS1t7eyNvmOy85ZYZXVt/wAGymmrbKPTWkaTYqhdVpJTV2PMuNUXIG32RLunpWnUsA9M2AHslb2HHPnM30k6L4rrGcIrLYW1WXYBncNbfeUNTQGJAucO5HFQH/oJtPTwP44KNHFOVybR6i76x1goF+FreQtEmeR69SmbXemf30P0kyh0gxKe7Xf96z/1AzVzT6Eps9TTCltpsPOWuCoInujPjvPfPKsP03xK7erf8SEH+Vh6S1w36RmHv4YHmr28mX6zGcdQOcj1FHjgqTBYb9IuGPvpVTmVVh/KxPlLbD9M8E+zEKv4w9PzcATneJmeuXo05qRtnkDD6TpPmlVH/C6N6GPM8xljYfIOs8bLxovEl5i4EyyDpeGvGdaAaGgycx4NO60ZDRQMWglzMf8ApKqFkw9EHN617cQq6vrUEYxBszCxAGQ2jIbPKJ6WPr6QwqberQue9ifSmI8MU+9r/Ym07jCKX7Z6Xhr6tkbWFpzX4R56vFQeOQjFV1AJI2C+/YJlqfaO0rsd7VRQdii47TvI42A8TOvpLqckN226u0drA7O6UuM0iQSF945luHISubEWzJ++c3jFsHPTsi4q6UrMSTUbPgbDuEJSg1WzWmSDsOWcJehfoz+U3qNbYfv79JLoY512O3Yc/WQVEWswcU+UWXFDTLjaFbxB8pOTTCNm9Pv9lreNjM4B4fZ++2OI+WX32zGWCD6oWlGvpaRosLB9Tt9m3ZrC0wfTnRlBCnVsXd7ki62t8xKjI33WlkjEnifv8vKOPoY1RZ0sNxPskdls5eDC4StN16Ikork82aky7QR2bIujXqKbgnKa7Smg3oe8NemfjA93k4+uw8pS4/D6iFh7SbwLA8sxuna27plR0tWjS9D9Ls4KNtHpzmrqsfZ7/pPM+glf2zuJJ/xPSxnbv9IGTXZ1XkinXytf/EiCmDkeNxbInv2enbIuIpVkPsWcfLcB/A2vKUZLdGdp7Mm4mqw2ObDeTl3gDb9iVdeoWvrAMewZcOZi8PphCSjqUbYVYWPYQY5XoK/uEcbWF+4/ZlxkuyJY2uCtq31b3a3C7ao45G4lficChPtJTbtRB5jVMtiDwzBzGsR5MYlluBkbfhBt2ED0mhkZyroSib/7JH4HceusJCfo/SPuvUXtCOPIqZqalMfs9vtA94Jjb09wDW4Aqwz25KIAZF+jh+Gsh/EHT6Eeca/VGJX3VVxs9l0fLhqk3t3TXVKY2bP3dU+P2Y29EEiwHcb9nMQAxuPw9Yj28NqWt7QplTkLWJGVvyjFDSFVPcrVEtuV3XyBm6VCpyLL4r6GdZC+TWf8ao1/4xADLUOluMTZXZhwZUbzIv5yyodP8SPfSm47GU+Ia3lJzaJpPtoU/wB0Mh/kIHlI1To1RbYrr+Fww8GX6yXGL6JcYvom4f8ASIPjw5H4HDeTAesssP08wre91ifiS/8AQTMpV6KD4apH40+qMfSQ6vRmsPdam37xQ+DgSXiiyHhiz0rD9J8I+zEoPxHUP89pcUcar+0ro+W1Srf0zxDE6JrJm9M24gqwPZqkyBax4HwMh4F0yXgXTPQKzl9JYlwL9XTCL3qinzZ5YDDOduXn4CUXQm6pVqHMs6KCSdwYsSd+1Ze1qjG+dhwH+JyeRq1KK4SPT8aOmCQl6Sj3jc/e4SHpCmWR0X2WIsLjfzHdbvjxOff9iN9uUzjDe27NzA4msVurLZwbEc4YHDgsHq+6MwvH8XLlvmxxWARzdlz2a2/xkB9DpuJnXGcUjKUZNnP1ivCE5+qh88JFRK+xbB46KgylWtaHXydJVluHzknC4vDZa7kNwZSo8cwe28oVxBjgxXZnuMqNJ7qyJXJbOjbYOrSI/wBtkP4SCe+2cmKZ5tVKHaq92R8rRldKVU9yo68tYlfAzojkj6o5pYpe7N/0jrOtBhTQuW9k2tkpB1jn4d887OKXNXFtxB9JL0vjGqKpqvchRYXAJuNuquy/ZM8aSc/OKX2ZtD6Rqy8w+NCN7AuRuG6bjRWOLD27A2G/lMFoZaIPtVlT8Su/kBaa/R2BpsdZcWr2IuF1RxsDcki9j4RaHewPIq3NHhqba5ZrauqAFNjfeTbdJICDYmrf5SV9IwzHcMuWcZeqd82SpHLKTbs5pHBU6os97jYSAWHYwzHZKY4R6Ruj668DYMOy9gZaVKplfWqGJxT5HGco8D1LGo+T02B+bVNx+9aM4gICSpFhnc6ynZvBM5TdjJFzHFV2KUlJ8URnU2FtbV4WBFj3RiogO3VO7eCOF85PNJTtUeEGogi1yO+/he9oySvamd1x2MPCwEGp+mwrb7POTzSO4i/Eg+JsReDIbZi/Yd/LZ6xgV/VbxbuP574s0W2kNbmCdvgJLUfMtuItfv1lBiVCn3SQd2dj4Egnwid9AMJTJ2D6ZcI+qbrHsH5mPKhYbSeW0ZbRe/rePLQPZ2AetolfYEUUss8uQ/Pf4TvV32DxjlSsib7ngPqZR4/pEqtqgi28Kbnsy+pHfG2kNKyzqUkX3mA2nnlty3yrwOlMPXDlFLKpAu65NltVdtt2coKLq1Zq3ta7Ze01wqkW1QNwyl/hq4sAAAANg4eX2ZjPMlwjaGFvkk0qaKvsKEDOzlAAAMkXYuQvqa2XzCILep38bTocbjax7OH34xJYTllJyds64x0qkBbL748Iyx++HfOs/hGXrDjEUcYRkmIq4pRtYDvEhPj0438Y0gJt4St/WA4HwnIUxWjt4a0SIWmhAvXESzQCToSAqG2vz84kpxkxaJjq4c/ecNQtJWmiOES2HlyuGH3/ANRa4QH78Iag0lAcLGxSZTdSRzBI9JonwI+/vKNPgOYzjUxOBDwensVS9ys1uDBXHfrC/nLNOnGJA9tKZ5hSPEXIPlIVTR54Rh8HbdLWQh4l6NDQ6bo2VSgBzU/Qj6ybS0/hn2Nqn9oX81vMS+FjZwktZCHiPQ6dZG9x1bkGBPhe8eOW2eZajDYT2SRQ0lXT3ajDlc28BkZamiHjZ6MDOgzEUelNdfeCv2qP7bHzlhQ6XJ8dMjmp+hB9Y1JEuMl0akGKlLh+keHb4yv4l/43lhS0hSb3aiHK+3O3ZtlEkoIPvKPJTuDfMDaTaw7Sch3zP47pRRS4T228h3A+p7pnMf0gr1cr6o3AbuwWsvcJLkkWoNm0xelKFIX1gTyOqvjv7ge2Z3HdKi51UBt2FV8Np75nloFjdiSeJzPiZOw2AJ2CZSy+jWOH2OGqanvvkd3ujstvkrD9H1bYCOw/nF0NHAbZPw66num1uBtu5Tkm5vhmscVcHaPRNjse3aPy/KSR0eqpsCt2N/ytHE0rUTY5I4ML+dryQvSBviQHsJH585zSedemWoyRAfCuvvIRzIy52IEjswz2/e68vV04h2gr4EeUS+KpPndT2gA+ecFmmvyiVqfaMxi6BYey5Xst9R9ZUV9Evn/uFu2/0mxrYWmdgt2E+myQauDHwue8A+lprHOv4C0zItgHX4b9lj/mJWg/yt4WmkqYZhvBkZ0I3GbLImFIqP8ASN8vp+cJZQj1MKRGAiwsb1ooNGOh5QItQIwHig8QUSktHFaRBUnQ8QE4MItX585CWpF9ZEBM1+z75xQqb7+MhCpFK8BkzWBtt8oGmp+/vKRRVh10BDr4cfZ7eMYqYMbPsR1H5n7+myGtfb5G0LYUiFUwI3bfveZHfBGW5qQ1rDONSYtKKB8LbdGGws0x1Tu9OEZbDLw8JSmS4GabDTi0Dsz7JoXwg4RKYQSvkJ+MqaGDJ3SxoaN7tksqFNV3ff5x5W+9khystQoYo4MLuv8Af/Uk6oA+9s51nPZ4Z8olm5/d5FlJUOM/+Py7M4ln+/SI29vbnviSwgMd1uf3u2Rttv13cpwsOU4WAHfCgOk/4/6iGb09ZxiOH39I2zRgL6wjeYlq7cY2zxtmi0piHGxBjTVjGyYgtDSgoc60wjWtCVpQUR7zt4QlDO3nQZyEAFBoB52EQBrRQaEIAKDzoeEImAoPOipOwgB1akUakIRAd6zdOipCEAFa06KkIQA71m+dDwhABN4sVDCEAOhvvsnOsMIQEd62JNaEIDOa95xnhCAhJeILwhAYgtEFpyEYhLGJJhCMYm87CEAP/9k=">
                        <hr>
                        
                        <a href="{{URL::to('/product/'.$i)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                    <div class="col-sm-8">
                        <strong>Dell Laptop for Sale</strong>
                        <div class="col-sm-12">
                            <p>Core 2 Due Dell laptop, prestine condition for sale, 4GB RAM, 80 GB HDD</p>
                        </div>
                        <div class="col-md-12">
                            28 day(s) left
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
@endsection