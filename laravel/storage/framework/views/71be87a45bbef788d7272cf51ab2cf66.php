<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <title>Online Resume</title> -->
    <title>Online Resume</title>
    
</head>
<style>
    .paper {
    position: relative;
    border: 1px solid;
    width: min-content;
    height: min-content;
    margin: 20px;
    box-shadow: 0px 0px 5px 0px #0000005e;
    border-radius: 10px;
    display: grid;
    padding: 30px;
    grid-column-gap: 30px;
}
.col_1 {position: relative;display: flex;grid-column: 1;flex-direction: column;width: 500px;}

.header1 {font-size: xx-large;margin: 20px 0px 50px 10px;}
.header3 {font-size: x-large;margin: 20px 0px 30px 0px;}
.skills{position: relative;}
.skills p::before {
    content: "•"; 
    color: black; 
    font-size: 1.2rem;
    display: inline-block;
    margin-right: 0.5rem; 
}
p{margin: 0px 0px 10px 0px}
.bold{font-weight: bold;text-align: justify;font-size: 13px;}

.col_2 {position: relative;display: flex;grid-column: 2;flex-direction: column;width: auto;margin: 20px 0px 0px 0px;}
.col_2 contact{position: relative;}
.col_2 p::before {
    content: "•"; 
    color: black; 
    font-size: 1.2rem;
    display: inline-block;
    margin-right: 0.5rem; 
}

.margin{margin:20px 0px 20px 0px}
</style>




<body style="display: flex; justify-content: center;">
    <div class="paper">
        <div class="col_1">
            <h1 class="header1 "><?php echo e($resume->name); ?></h1>
            <div style="width: 100%; border: 1px solid;"></div>
            <h3 class="header3">RESUME OBJECTIVE</h3>
            <p><?php echo e($resume->objective); ?></p>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3">PROFESSIONAL SKILLS</h3>
            <div class="skills">
                <span class="bold">Design</span>
                <p ><?php echo e(json_decode($resume->skills_design)->{1}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_design)->{2}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_design)->{3}); ?></p>
                <span class="bold">Problem-solving</span>
                <p ><?php echo e(json_decode($resume->skills_problem_solving)->{1}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_problem_solving)->{2}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_problem_solving)->{3}); ?></p>
                <span class="bold">Project Management</span>
                <p ><?php echo e(json_decode($resume->skills_management)->{1}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_management)->{2}); ?></p>
                <p ><?php echo e(json_decode($resume->skills_management)->{3}); ?></p>
            </div>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3">CERTIFICATIONS</h3>
            <p ><?php echo e(json_decode($resume->certifications)->{1}); ?></p>
        </div>
        <div class="col_2">
            <img style="width: 200px; border: 1px solid; align-self: center;" src="<?php echo e(asset('storage/2x2.jpg')); ?>" alt="Image">

            <br>
            <h3 class="header3 margin">CONTACT</h3>
            <p style="white-space: nowrap;"><span class="contact bold">Address:&nbsp;&nbsp;</span><?php echo e($resume->address); ?></p>
            <p stle="white-space: nowrap;margin: 0;"><span class="contact bold">Phone:&nbsp;&nbsp;</span><?php echo e($resume->phone); ?></p>
            <p style="white-space: nowrap;margin: 0;"><span class="contact bold">Email:&nbsp;&nbsp;</span><?php echo e($resume->email); ?></p>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3 margin">SKILLS</h3>
            
            <p ><?php echo e(json_decode($resume->additional_skills)->{1}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{2}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{3}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{4}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{5}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{6}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{7}); ?></p>
            <p ><?php echo e(json_decode($resume->additional_skills)->{8}); ?></p>
            
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3 margin">EDUCATION</h3>
            <p class="bold"><?php echo e(json_decode($resume->education)->{1}); ?></p>
            <p class="bold"><?php echo e(json_decode($resume->education)->{2}); ?></p>
            <p class="bold"><?php echo e(json_decode($resume->education)->{3}); ?></p>
            <p class="bold"><?php echo e(json_decode($resume->education)->{4}); ?></p>
            <div style="width: 100%;  border: 1px solid;"></div>
        </div>
    </div>
</body>
</html><?php /**PATH /cloudide/workspace/Prefinal/laravel/resources/views/resume/index.blade.php ENDPATH**/ ?>