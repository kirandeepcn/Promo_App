<?php
include_once 'header.php';

include_once 'check_session.php';
?>

<!--div class="sec_create"> 

    <h1> Create New Questionnaire </h1>
</div>



<div class="wrapper">

    <form action="#" method="post">

        <div class="center">

            <div class="top_data">

                <div class="left_data">

                    <label>Questionnaire Name</label>



                    <div class="qsn_name">

                        <input type="text" class="input" name="ques">



                    </div>

                    <label>Client Login</label>



                    <div class="name">

                        <input type="text" class="input" name="clientname" placeholder="Username">

                    </div>

                    <div class="pass">

                        <input type="text" class="input" name="password" placeholder="Password">

                    </div>

                </div>



                <div class="right_data">

                    <div class="run_time">

                        <span>Questionnaire Run Time</span>

                        <h2>11/7/15, 7:00am-8:00am <img src="images/minus.jpg"/></h2>

                        <span> <img src="images/add.jpg"/> add time</span>

                    </div>

                    <div class="export">

                        <span>Allow client to export?</span>

                        <div class="onoffswitch">

                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab4" checked>

                            <label class="onoffswitch-label" for="tab4">

                                <span class="onoffswitch-inner"></span>

                                <span class="onoffswitch-switch"></span>

                            </label>

                        </div>

                    </div>

                    <div class="import">

                        <span>Allow client to import?</span>

                        <div class="onoffswitch">

                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab5" checked>

                            <label class="onoffswitch-label" for="tab5">

                                <span class="onoffswitch-inner"></span>

                                <span class="onoffswitch-switch"></span>

                            </label>

                        </div>

                    </div>

                </div>	 

            </div>

            <div class="clear"></div>

            <div class="lastouter_sec"> 

                <div class="button">

                    <button type="button" class="btn" name="saveAndNext">Save & Next</button>

                    <button type="button" class="btn" name="saveAndExit">Save & Exit</button>

                    <button type="button" class="btn_cancel" name="cancel">Cancel</button>

                </div>

            </div>





        </div>

    </form>

</div-->

<div class="sec_create">
    <h2 class="sec_head_ques"> Create a Questionnaire</h2>
  </div>


<div class="wrapper">
       <div class="center">
   <div class="top_data">
      <div class="left_data">
         <span>Questionnaire Name</span>
		 <div class="qsn_name">
		<input type="text" class="input">
	      </div>
	    <span>Client Login</span>
		
		     <div class="name">
       		<input type="text" class="input" placeholder="Username">
			</div>
			<div class="pass">
			<input type="text" class="input" placeholder="Password">
			</div>
	  </div>

     <div class="right_data">
         <div class="run_time">
		   <span>Questionnaire Run Time</span>
		   <h2>11/7/15, 7:00am-8:00am
           <button class="bb_img"> <img src="images/minus.jpg"/></button></h2>
		    <button class="bb_img"><img src="images/add.jpg"/></button>
            <span> add time</span>
		 </div>
		 <div class="export">
		   <span>Allow client to export?</span>
		     <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab4" checked>
    <label class="onoffswitch-label" for="tab4">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
		 </div>
		 <div class="import">
		 <span>Allow client to import?</span>
		     <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab5" checked>
    <label class="onoffswitch-label" for="tab5">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
		 </div>
     </div>	 
   </div>
   <div class="clear"></div>
   <div class="lastouter_sec">
        <button class="butt_view bb_sec6"> Save&Next </button>
        <button class="butt_view bb_sec6"> Save&Exit </button>
        <button class="butt_view bb_sec6 bb_bg"> Cancel </button>
      </div>
</div>
</div>

</body>

</html>