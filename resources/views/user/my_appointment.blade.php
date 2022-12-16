@include('layouts.frontend.header')
<div align="center" style="padding:70px;">

    <table>
        <tr style="background-color:#00D9A5">
<th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
<th style="padding:10px; font-size:20px; color:white;">Date</th>
<th  style="padding:10px; font-size:20px; color:white;">Message</th>
<th  style="padding:10px; font-size:20px; color:white;">Status</th>
<th  style="padding:10px; font-size:20px; color:white;">Cancel Appoint</th>
        </tr>
@foreach($appoint as $appoints)
        <tr style="background-color:#2D3B38; border-bottom:1px solid white;" align="center">
            <td style="padding:10px; font-size:20px; color:white; border-left:2px solid white; padding:20px;">{{$appoints->name  }}</td>
            <td style="padding:10px; font-size:20px; color:white; border-left:2px solid white;">{{$appoints->date  }}</td>
            <td style="padding:10px; font-size:20px; color:white; border-left:2px solid white;">{{$appoints->message  }}</td>
            <td style="padding:10px; font-size:20px; color:white; border-left:2px solid white;">{{$appoints->status  }}</td>
<td><a href="{{ url('cancel_appoint' , $appoints->id) }}" class="bt btn-danger" onclick="return confirm('are you sure to delete this')" style="padding:10px; font-size:20px; color:white; border-left:2px solid white;">Cancel</a></td>
          </tr>
        @endforeach
    </table>
</div>
@include('layouts.frontend.footer')


