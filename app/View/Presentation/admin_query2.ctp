<style> 
  .fa-caret-right{
  transition: all .4s ease;
}
.active .fa-caret-right{
  transform: rotate(90deg);
}

// Pen decoration
body{
  background-color: #f5f5f5;
}
.panel-title a{
  text-decoration: none;
}

</style>

                            <style>
a.button {
  border-style: solid;
  border-width : 1px 1px 1px 1px;
  text-decoration : none;
  padding : 4px;
  border-color : #000000
}
                            </style>


                        <form action="/action_page.php" method="get">
<div class="col-md-12 col-xs-1">
        <h3> Please select from the list of products you would like to include in your search, and then choose from the list of Categories that you would like to search for.</h3>
    <div class="col-md-4 col-xs-1">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default active">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-caret-right"></i> Products
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                            <input type="checkbox" >QuickBooks POS Desktop (QBPOS)<br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">QBPOS Desktop Basic</li>
                                <li><input type="checkbox">QBPOS Desktop Pro</li>
                                <li><input type="checkbox">QBPOS Desktop Multi-Store</li>
                            </ul>
                            <input type="checkbox" checked>QuickBooks Online (QBO)<br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">QBO Self-Employed</li>
                                <li><input type="checkbox">QBO Simple Start</li>
                                <li><input type="checkbox">QBO Essentials</li>
                                <li><input type="checkbox">QBO Plus</li>
                                <li><input type="checkbox">QBO Accountant</li>
                            </ul>
                            <input type="checkbox" >QuickBooks Desktop (QBDT)<br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox" checked>QBDT Pro</li>
                                <li><input type="checkbox" checked>QBDT Premier</li>
                                    <ul style="list-style:none;">
                                        <li><input type="checkbox">QBDT Premier General Business</li>
                                        <li><input type="checkbox">QBDT Contractor</li>
                                        <li><input type="checkbox">QBDT Premier Manufacturing & Wholesale</li>
                                        <li><input type="checkbox">QBDT Premier Non Profit</li>
                                        <li><input type="checkbox">QBDT Premier Professional Services</li>
                                        <li><input type="checkbox">QBDT Premier Retail</li>
                                    </ul>
                                <li><input type="checkbox">QBDT Premier Accountant</li>
                                <li><input type="checkbox">QB Enterprise (QBES)</li>
                                    <ul style="list-style:none;">
                                        <li><input type="checkbox">QBES General Business</li>
                                        <li><input type="checkbox">QBDT Contractor</li>
                                        <li><input type="checkbox">QBES Manufacturing & Wholesale</li>
                                        <li><input type="checkbox">QBES Non Profit</li>
                                        <li><input type="checkbox">QBES Professional Services</li>
                                        <li><input type="checkbox">QBES Retail</li>
                                    </ul>
                                <li><input type="checkbox">QB Enterprise Accountant </li>
                            </ul>
                            <input type="checkbox">Intuit Field Service Management (IFSM)<br>
                            <input type="checkbox">Payments<br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">QBPOS Desktop</li>
                                <li><input type="checkbox">QBDT</li>
                                <li><input type="checkbox">QBO</li>
                                <li><input type="checkbox">IFSM</li>
                            </ul>
                            <input type="checkbox" checked>Payroll<br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">QBDT Payroll</li>
                                    <ul style="list-style:none;">
                                        <li><input type="checkbox">QBDT Basic Payroll</li>
                                        <li><input type="checkbox">QBDT Enhanced Payroll</li>
                                        <li><input type="checkbox">QBDT Enhanced for Accountant Payroll</li>
                                        <li><input type="checkbox">QBDT Full Service Payroll</li>
                                    </ul>
                                <li><input type="checkbox">QBO Payroll</li>
                                    <ul style="list-style:none;">
                                        <li><input type="checkbox">QBO Basic Payroll</li>
                                        <li><input type="checkbox">QBO Enhanced Payroll</li>
                                        <li><input type="checkbox">QBO Full Service Payroll</li>
                                    </ul>
                                <li><input type="checkbox">Stand-Alone Payroll</li>
                                    <ul style="list-style:none;">
                                        <li><input type="checkbox">Intuit Online Payroll for Accounting Professionals (IOP4A)</li>
                                        <li><input type="checkbox">Intuit Full Service Payroll (IFSP)</li>
                                    </ul>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xs-1">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default active">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-caret-right"></i> Category
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                            <input type="checkbox" > Inventory <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Multi-site/store</li>
                                <li><input type="checkbox">Assemblies</li>
                            </ul>
                            <input type="checkbox" checked> Payroll Taxes and Forms <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">DIY</li>
                                <li><input type="checkbox">Do-It-For-You</li>
                            </ul>
                            <input type="checkbox" checked> Additional Services / Information <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Time Tracking</li>
                                <li><input type="checkbox">Time & Expenses</li>
                            </ul>
                            <input type="checkbox"> Reports - Business Overview <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Reports - Profit & Loss</li>
                            </ul>
                            <input type="checkbox"> Reports - Accountant <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Class</li>
                                <li><input type="checkbox">Unclassified</li>
                                <li><input type="checkbox">Adjusted</li>
                            </ul>
                            <input type="checkbox"> Security Standards <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">EMV, PCI, Compliant</li>
                            </ul>
                            <input type="checkbox"> General <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Open Files Simultaneously</li>
                            </ul>
                            <input type="checkbox"> Customers <br>
                            <ul style="list-style:none;">
                                <li><input type="checkbox">Billing Rate Levels</li>
                                <li><input type="checkbox">Disallow sales</li>
                                <li><input type="checkbox">Change Order</li>
                            </ul>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <a class="button" href="/admin/presentation/query2result"> Submit </a>
                        </form>
  

<script> 
    /**
 * Bootstrap Accordion header active v1.0
 * Manu Morante @unavezfui
 * Last update: 20/10/2014
 * https://codepen.io/unavezfui/pen/HibzA
 */
(function() {
  
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active');
    }else{
      $(this).removeClass('active');
    }
  });  

}).call(this);
</script>
