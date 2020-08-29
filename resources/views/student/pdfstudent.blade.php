<!DOCTYPE html>

<html >
    <head>
        <style>
              .a {text-transform: uppercase; }
        </style>
     
    </head>
    <body>
       
    <img src="/images/gaclogo.JPG" alt="">

                 <h3>GOVERNMENT OF MIZORAM <br>
                GOVERNMENT AIZAWL COLLEGE, AIZAWL:MIZORAM </h3>
       
              
  
        
        1. Name :<u> {{$student->name}}</u> &nbsp;&nbsp;&nbsp; Mobile No:<u> {{$student->contact}}</u> <br>
        3. Sex : <u>{{$student->sex}} </u> <br>
        4. Permanent Home Address:  <u>{{$student->permanent_home_address}} </u> <br>
        5. Detailed Present Address (Aizawl) : <u>{{$student->detailed_present_address_aizawl}} </u> <br>
        6. Name and Address of Local Guardian (if any): <u>{{$student->name_of_guardian}} {{$student->contact_of_guardian}}, {{$student->address_of_guardian}} </u> <br>
        7. Date of Birth ( as per HSLC/HSSLC Certificate or its equivalent):  <u>{{$student->dob}} </u> <br>
        8. Community : <u class="a">{{$student->community}} </u> <br>
        9. Identification mark : <u>{{$student->identification_mark}} </u> <br>
        10. Religion : <u>{{$student->religion}} </u> <br>
        11. Whether BPL /AAY/APL : <u class="a">{{$student->ration_card}} </u> </div> <br>
        12. Whether student is differently-abled or handicapped persion : <u>{{$student->handicapped}} </u> <br>
        13. Whether student is from Urban or Rural area : <u>{{$student->urban_rural}} </u> <br>
        14. Aadhaar Number :  <u>{{$student->aadhaar}} </u> <br>
        15. Current Semester : <u>{{$student->semester}} </u> <br>
    
        <script src="{{ mix('/js/app.js') }}"></script>

@yield('js')

    </body>
</html>