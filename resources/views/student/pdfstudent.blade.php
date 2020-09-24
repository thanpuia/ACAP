<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css" media="all">

        .center{
            text-align: center;
        }

        .row{
            color:black;
         
            
        }
        table{
            border-collapse: separate;
        border-spacing: 0 1em;
        }
        .space{
            margin-bottom:20px;
        }
        .value{
            font-weight: bold;
        }
        td{
            vertical-align: text-top;
        }
        .caps{
            text-transform: uppercase;
        }
        .capitalize{
            text-transform: capitalize;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
}
    
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            <img src="{{ public_path('/images/gaclogo.jpg') }}"  width="150" height="110" alt="GAC logo">

        </td>
        <td class="center" style="padding-right:80px;">
            <h3>GOVERNMENT OF MIZORAM <br>
            GOVERNMENT AIZAWL COLLEGE,<br>
             AIZAWL:MIZORAM </h3>

        </td>
        <td>
        <img src="{{ public_path('/images/photo_frame.jpg') }}"  width="110" height="120" alt="GAC logo">

        </td>
    </tr>
</table>

<p class="space"></p>

<table>
<tr class="row">
    <td>     1. Name </td>
    <td class="value">{{$student->name}} </td>
</tr>
<tr class="row">
    <td>  2. Mobile No</td>
    <td class="value"> {{$student->contact}} </td>
</tr>
<tr class="row">
    <td> 3. Sex </td>
    <td class="value capitalize"> {{$student->sex}}</td>
</tr>
<tr class="row">
    <td class=""> 4. Permanent Home Address </td>
    <td class="value">{{$student->permanent_home_address}}  </td>
</tr>
<tr class="row">
    <td class=""> 5. Detailed Present Address (Aizawl) </td>
    <td class="value ">{{$student->detailed_present_address_aizawl}}  </td>
</tr>
<tr class="row">
    <td class="">6. Name and Address of Local Guardian (if any)  </td>
    <td class="value">{{$student->name_of_guardian}}, {{$student->contact_of_guardian}}, {{$student->address_of_guardian}} </td>
</tr>
<tr class="row">
    <td class=""> 7. Date of Birth ( as per HSLC/HSSLC Certificate or its equivalent) </td>
    <td class="value">{{$student->dob}} </td>
</tr>
<tr class="row">
    <td>8. Community   </td>
    <td class="value caps"> {{$student->community}} </td>
</tr>
<tr class="row">
    <td> 9. Identification mark  </td>
    <td class="value">{{$student->identification_mark}} </td>
</tr>
<tr class="row">
    <td>10. Religion  </td>
    <td class="value capitalize"> {{$student->religion}}</td>
</tr>
<tr class="row">
    <td> 11. Whether BPL /AAY/APL  </td>
    <td class="value caps">{{$student->ration_card}} </td>
</tr>
<tr class="row">
    <td>12. Whether student is differently-abled or handicapped persion  </td>
    <td class="value capitalize">{{$student->handicapped}} </td>
</tr>
<tr class="row">
    <td>13. Whether student is from Urban or Rural area</td>
    <td class="value capitalize">{{$student->urban_rural}} </td>
</tr>
<tr class="row">
    <td>14. Aadhaar Number  </td>
    <td class="value">{{$student->aadhaar}}  </td>
</tr>
<tr class="row">
    <td> 15. Current Semester  </td>
    <td class="value">{{$student->semester}} </td>
</tr>

</table>


</body>
</html>

