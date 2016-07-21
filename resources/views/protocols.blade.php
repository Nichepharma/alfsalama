
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <p align="center">
                <b>ALFSALAMA Protocols Documentation</b>
              </p>
              <p>Datalink URL : <a href="http://www.alfsalama.com/datalink">http://www.alfsalama.com/datalink</a></p>
              <p>Request Example : http://www.alfsalama.com/datalink?action=get_cities&data={"country_id":"1"}</p>

                <div class="panel-body">
                    <table border="1" style="table" width="100%">
                      <thead>
                        <th>Section</th>
                        <th>Function Description</th>
                        <th>Action</th>
                        <th>Data Example</th>
                        <th>Samples Response</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td rowspan="7" align="center">Registration & Login</td>
                          <td>Get Countries</td>
                          <td>get_countries</td>
                          <td></td>
                          <td>[{"id":1,"name":"Egypt"}]</td>
                        </tr>
                        <tr>
                          <td>Get The Cities Of A Country</td>
                          <td>get_cities</td>
                          <td>{"country_id":"1"}</td>
                          <td>[{"id":1,"name":"Alexandria","country_id":1},{"id":2,"name":"Cairo","country_id":1}]</td>
                        </tr>
                        <tr>
                          <td>Get Doctors Specialities</td>
                          <td>get_specs</td>
                          <td></td>
                          <td>[{"id":1,"name":"Orth"},{"id":2,"name":"Pud"}]</td>
                        </tr>
                        <tr>
                          <td>Check Availability of an email</td>
                          <td>check_email</td>
                          <td>{"email":"admin@admin.com"}</td>
                          <td>1 //means it's found</td>
                        </tr>
                        <tr>
                          <td>Register A New Patient</td>
                          <td>put_patient</td>
                          <td>{"name":"anyname","email":"anyemail","password":"anypassword","country_id":"1","city_id":"2","address":"anyaddress","contact":"anycontact"}</td>
                          <td>Done</td>
                        </tr>
                        <tr>
                          <td>Register A New Doctor</td>
                          <td>put_doctor</td>
                          <td>{"name":"anyname","email":"anyemail","password":"anypassword","country_id":"1","city_id":"2","address":"anyaddress","contact":"anycontact","spec_id":"2"}</td>
                          <td>Done</td>
                        </tr>
                        <tr>
                          <td>Login</td>
                          <td>login</td>
                          <td>{"email":"aaa@aaa.com", "password":"123456"}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
