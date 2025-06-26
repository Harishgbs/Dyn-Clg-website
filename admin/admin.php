<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
 <!--   <script>
         var adminname = document.getElementsByClassName("admin_name");
         adminname[0].style.display="none";

    function resize()
    { 
        document.getElementById('rightbar').classList.toggle('resiz');
        document.getElementById('leftbar').classList.toggle('resiz');
    }
    
    function userspage(){
        document.getElementById('userspage').style.display="block";
        document.getElementById('pagespage').style.display="none";
    }
    function pagespage(){
        document.getElementById('userspage').style.display="none";
        document.getElementById('pagespage').style.display="block";
    }
    
    
</script>-->
</head>

<section>
    <header>
        <div class="admin_name">
            <p><i onclick="resize()" style="cursor: pointer ;">></i><b>Admin</b></p>
        </div>
    </header>
    <body>
        <div class="contain">
            <nav class="left_nav" id="leftbar">
            
            <!-- <li id="stats" onclick="statspage();">Stats</li> 
            <li id="users" onclick="userspage();">Users</li>-->
            <li id="pages" onclick="pagespage();">Pages</li>
            <!-- <li id="comnts" onclick="comntspage();">Comments</li> -->

            </nav>
            <nav class="right_nav" id="rightbar">
               
          <!--      <div id="userspage" style="display: block;" class="pg">
                    <h1>userspage</h1>
                </div>-->
                <div id="pagespage"  class="pg">
                   
                    <!-- <div class="pages">
                        <h1>index page</h1>
                        <a id="opena">edit page</a>
                       
                    </div> -->
                   <script>

                    let pages = [20]
                        pages[0]="index page";
                        pages[1]="Branches page";
                        pages[2]="Labs/Workshop page";
                        pages[3]="Library page";
                        pages[4]="Faculty page";
                        pages[5]="Project Ideas page";
                        pages[6]="Placements page";
                        pages[7]="Infrastructure page";
                        pages[8]="Events page";
                        pages[9]="Admissions page";
                        pages[10]="Fee_structure page";
                        pages[11]="Department_admin";

                    var links=[20];
                        links[0]="indexinputs.php";
                        links[1]="branchadmin.php ";
                        links[2]="labsworkshop_admin.php ";
                        links[3]="library_admin.php ";
                        links[4]="faculty_admin.php ";
                        links[5]="projectideasadmin.php ";
                        links[6]="placements_admin.php ";
                        links[7]="infrastructure_admin.php ";
                        links[8]="Eventadmin.php ";
                        links[9]="admissions.php ";
                       links[10]="fee_structure_admin.php ";
                       links[11]="dept_admin.php"
                        for(let i=0;i<=11;i++)
                        {
                            document.writeln('<div class="pages">');
                            document.writeln('<h1 >'+pages[i]+'</h1>');
                            document.writeln('<a id="opena"href="'+links[i]+'">edit page</a>');
                            document.writeln('</div>');
                        }

                    </script>
                     

                    

                </div>
                

            </nav>
        </div>

    </body>
    <footer>

    </footer>
	
</section>
</html>