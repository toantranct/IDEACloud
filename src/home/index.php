<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link href="../Assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="../Assets/css/home.css">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- css menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" integrity="sha512-0/rEDduZGrqo4riUlwqyuHDQzp2D1ZCgH/gFIfjMIL5az8so6ZiXyhf1Rg8i6xsjv+z/Ubc4tt1thLigEcu6Ug==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
      <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
      <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
      <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
      <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
      <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
      <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
      <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
      <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
    </symbol>
  </svg>
  <header class="m-0 border-bottom" style="background-color: white; box-sizing:border-box; height: 70px;">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="mt-3 d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <!-- <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
                </ul> -->
        <!-- <div class="col-12 col-lg-auto me-lg-auto"></div> -->
        <form class="col-12 ms-auto col-lg-3 mt-3 mb-3 mb-lg-0 me-lg-3 ">
          <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search">
        </form>

        <div class="dropdown text-end mt-3">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Cài đặt</a></li>
            <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  <div class="d-flex bd-highlight">
    <!-- SIDE Bars -->

    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
      <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-5 fw-semibold">IDEA Cloud</span>
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Tải/Thêm tài liệu mới
          </button>
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Tải tài liệu lên</a></li>
              <li><a href="#" class="link-dark rounded">Tạo tài liệu online</a></li>
              <!-- <li><a href="#" class="link-dark rounded">Đã tạo</a></li> -->
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Tài liệu của tôi
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Đã tải lên</a></li>
              <li><a href="#" class="link-dark rounded">Được tạo online</a></li>
              <!-- <li><a href="#" class="link-dark rounded">Monthly</a></li>
            <li><a href="#" class="link-dark rounded">Annually</a></li> -->
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Được chia sẻ với tôi
          </button>
          <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Nhóm tài liệu 1</a></li>
              <li><a href="#" class="link-dark rounded">Nhóm tài liệu 2</a></li>
              <li><a href="#" class="link-dark rounded">Tài liệu không có nhóm</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Tài khoản
          </button>
          <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Hồ sơ</a></li>
              <li><a href="#" class="link-dark rounded">Cài đặt</a></li>
              <li><a href="#" class="link-dark rounded">Đăng xuất</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <!-- End sidebars -->

    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">
          <div class="h-100 col-md-10 border" style="background-color: white;">

            <div class="row p-2-grow-1 border-bottom">
              <a href="/" class="d-flex col-2 justify-content-center pb-2 mt-2 text-decoration-none border-end ">
                <button class="btn btn-primary rounded-pill" type="submit">Tải tệp lên</button>
              </a>
              <a href="/" class="d-flex col-2 justify-content-center pb-2 mt-2 text-decoration-none">
                <button class="btn btn-info rounded-pill" type="submit">Tạo mới</button>
              </a>
            </div>

            <div class="h-100 file">
              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <div class="card-box">
                        <div class="row">
                          <div class="col-lg-6 col-xl-6">
                            <h4 class="header-title m-b-30">Tài liệu của tôi</h4>
                          </div>
                        </div>

                        <div class="row">
                          

                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><div class="file-item-icon file-item-level-up fas fa-level-up-alt text-secondary"></div> </div><a href="#" class="file-download"></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">...</h5>
                              
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/pdf.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/bmp.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Bmpfile.bmp</h5>
                                <p class="mb-0"><small>845.8 mb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/psd.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Photoshop_file.ps</h5>
                                <p class="mb-0"><small>684.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/avi.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Avifile.avi</h5>
                                <p class="mb-0"><small>5.9 mb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/cad.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Cadfile.cad</h5>
                                <p class="mb-0"><small>95.8 mb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/txt.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Mytextfile.txt</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/eps.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Epsfile.eps</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/dll.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Project_file.dll</h5>
                                <p class="mb-0"><small>684.3 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/sql.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">Website_file.sql</h5>
                                <p class="mb-0"><small>457.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/zip.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/ps.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xl-2">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                              <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/png.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                              <div class="file-man-title">
                                <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                <p class="mb-0"><small>568.8 kb</small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="text-center mt-3">
                          <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                        </div>
                      </div>
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row -->
                </div>
                <!-- container -->
              </div>
            </div>
          </div>

          <div class="d-flex h-100 col-md-2 ms-auto border" id="info">

            <div class="h-100 p-3 bg-white">

              <span class="fs-5 fw-semibold  d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom"> <i class="bi bi-info-circle"></i> &nbsp;Thông tin</span>
              ghi gì đó ở đây = ))
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>


  <script src="../Assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../Assets/bootstrap5/js/bootstrap.min.js"></script> -->
  <script src="../Assets/js/home.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>