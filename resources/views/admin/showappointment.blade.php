<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
<div align="center" style="padding-top:100px;">
    <table>
        <tr style="background-color:#0F1015;">
            <th style="padding: 10px;">Customer Name</th>
            <th style="padding: 10px;">Email</th>
            <th style="padding: 10px;">Phone</th>
            <th style="padding: 10px;">Doctor Name</th>
            <th style="padding: 10px;">Date</th>
            <th style="padding: 10px;">Message</th>
            <th style="padding: 10px;">Status</th>
            <th style="padding: 10px;">Approve</th>
            <th style="padding: 10px;">Cancel</th>
            <th style="padding: 10px;">Send Mail</th>
        </tr>
@foreach ($data as $appoint )
<<<<<<< HEAD
    

        <tr align="center" style="background-color: #01D25C;">
            <td>{{ $appoint->name  }}</td>
            <td styel="border-left:2px solid white;">{{ $appoint->email  }}</td>
            <td>{{ $appoint->phone  }}</td>
            <td>{{ $appointل
            ->name }}</td>
            <td>{{ $appoint->date  }}</td>
            <td>{{ $appoint->messagr  }}</td>
            <td>{{ $appoint->status  }}</td>
            <td>
=======


        <tr align="center" class="mt-5" style="background-color: #01D25C; border-bottom:1px solid white;">
            <td class="mt-5">{{ $appoint->name  }}</td>
            <td styel="border-left:2px solid white;border-left:2px solid white;">{{ $appoint->email  }}</td>
            <td style="padding: 10px;border-left:2px solid white;">{{ $appoint->phone  }}</td>
            <td style="padding: 10px;border-left:2px solid white;">{{ $appoint->name }}</td>
            <td style="padding: 20px;border-left:2px solid white;">{{ $appoint->date  }}</td>
            <td style="padding: 10px;border-left:2px solid white;">{{ $appoint->messagr  }}</td>
            <td style="padding: 10px;border-left:2px solid white;">{{ $appoint->status  }}</td>
            <td style="padding: 10px;border-left:2px solid white;">
>>>>>>> 4eaff116b726dc2da6dca85fd317730d498a963b
                <a class="btn btn-success border-white" href="{{ url('approved',$appoint->id) }}">Approved</a>
            </td>

            <td>
                <a class="btn btn-danger" href="{{ url('canceled' , $appoint->id) }}">Canceled</a>
            </td>
<<<<<<< HEAD
            
=======

>>>>>>> 4eaff116b726dc2da6dca85fd317730d498a963b
            <td>
              <a class="btn btn-primary" href="{{ url('emailview' , $appoint->id) }}"> Mail</a>
          </td>
        </tr>
        @endforeach
    </table>
</div>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  @include('admin.script')
  </body>
</html>
