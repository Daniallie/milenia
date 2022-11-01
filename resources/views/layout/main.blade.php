<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milenia Armada Ekspress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/97b3e6800f.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>

      .content {
        
  display: flex;
  justify-content: space-around;
  align-items: center;
  
}
    .value {
  font-size: 50px;
  display: block;
  font-weight: bold;
  color: #fff;
}
.cover {
    min-height: 100vh;
    position: relative;
    color: white;
    background-size: cover;
    background-image: url("{{ asset("image/3ss-office.jpg") }}");
}

#content {
    position: absolute;
}

.cover::before {
    content: "";
    position: absolute;
    background-color: #000;
    opacity: 0.5;
    width: 100%;
    height: 100%;
}

.cover-about {
    min-height: 50vh;
    position: relative;
    color: white;
    background-size: cover;
    background-image: url("{{ asset("image/cover-about.jpg") }}");
}

.cover-about::before {
    content: "";
    position: absolute;
    background-color: #000;
    opacity: 0.5;
    width: 100%;
    height: 100%;
}

.cover-services {
    min-height: 100vh;
    position: relative;
    color: white;
    background-size: cover;
    background-image: url("{{ asset("image/service-image.jpeg") }}");
}

.cover-services::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
}

.cover2 {
    min-height: 50vh;
    position: relative;
    color: white;
    background-size: cover;
    background-image: url("{{ asset("image/backgroundmotto.jpg") }}");
}

#content2 {
    position: relative;
    width: 50%;
    height: auto;
}

.cover2::before {
    content: "";
    position: absolute;
    background-color: #000;
    opacity: 0.5;
    width: 100%;
    height: 100%;
}

.cover3 {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    color: white;
    background-size: cover;
    background-image: url("{{ asset("image/contact.jpg") }}");
}

#content3 {
    position: relative;
    display: flex;
    justify-content: center;
    align-content: center;
}

.cover3::before {
    content: "";
    position: absolute;
    background-color: #000;
    opacity: 0.5;
    width: 100%;
    height: 100%;
}

.vertikal {
    /*mengatur border bagian kiri tag div */
    border-left: 2px solid black;
    /* mengatur tinggi tag div*/
    height: 100%;
    /*mengatur lebar tag div*/
    width: 2px;
}


.slider {
  height: 17rem;
  position: relative;
  display: flex;
  overflow: hidden;
}

.item .title {
  font-weight: bold;
  margin: 1rem;
}

.item img {
  height: 14rem;
}

.next,
.prev {
  font-family: monospace;
  font-size: 1rem;
  background: none;
  border: 0px;
  cursor: pointer;
  display: flex;
  align-items: center;
  color: rgb(100,100,100, 0.5);
}
.prev{
  transform: rotate(-180deg);
}
.next:hover{
  text-shadow: 2px 2px 2px rgb(200,200,200);
}
.prev:hover{
  text-shadow: 2px -2px 2px rgb(200,200,200);
}

.item {
  flex: 1 0 25%;
  min-height: 200px;
  text-align: center;
  height: auto;
}

@media (max-width: 1024px) {
  .item {
    flex: 1 0 33%;
  }
}
@media (max-width: 768px) {
  .item {
    flex: 1 0 50%;
  }
}
@media (max-width: 576px) {
  .item {
    flex: 1 0 100%;
  }
}
</style>
</head>
<body>
    @yield('content')

    @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
    const nextSlide = (event) => {
      const slider = event.parentNode.children[1]
      slider.append(slider.children[0])
    }
    const prevSlide = (event) => {
      const slider = event.parentNode.children[1]
      slider.prepend(slider.children[slider.children.length - 1])
    }
</script>
<script>
  const counters = document.querySelectorAll('.value');
const speed = 200;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('akhi');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
     
   }
   
   animate();
});



</script>
</body>
</html>