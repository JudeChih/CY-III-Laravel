<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
            
        <div data-role="header">
            <a rel="external" href="/employee/{{$employeeDetail->employeeId}}/edit">修改</a>
            <h1>Employee Details</h1>
        </div>
        <div data-role="content">
            <img src="/images/{{ $employeeDetail->picture }}" class="employee-pic" width="100" />
            <div class="employee-details">
                <h3>{{ $employeeDetail->firstName }} {{ $employeeDetail->lastName }}</h3>
                <p>{{ $employeeDetail->title }}</p>
                <p>{{ $employeeDetail->department["departmentName"] }}</p>
            </div>

            <ul data-role="listview" data-inset="true" class="action-list">
                <li><h4>Call office</h4><p>{{ $employeeDetail->officePhone }}</p></li>
                <li><h4>Call cell</h4><p>{{ $employeeDetail->cellPhone }}</p></li>
                <li><h4>SMS</h4><p>{{ $employeeDetail->cellPhone }}</p></li>
                <li><h4>Email</h4><p>{{ $employeeDetail->email }}</p></li>
            </ul>
        </div>
    </div>
</body>
</html>