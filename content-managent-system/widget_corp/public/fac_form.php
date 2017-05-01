<!DOCTYPE html>
<head>
  <title>Faculty Details</title>
</head>
<link href="stylesheets/fac_form.css" rel="stylesheet" />
<div class="form-style-10">
<h1>Enter faculty details here!</h1>
<form>
    <div class="section"><span>1</span>Name</div>
    <div class="inner-wrap">
        <label>Your Full Name: <input type="text" name="name" /></label>
    </div>

    <div class="section"><span>2</span>Qualifications</div>
    <div class="inner-wrap">
        <label>Qualification: <input type="text" name="qualification" /></label>
        <label>Highest Qualification: <input type="text" name="high_qual" /></label>
    </div>

    <div class="section"><span>3</span>Domain Details</div>
        <div class="inner-wrap">
        <label>Designation: <input type="text" name="designation" /></label>
        <label>Specialization: <input type="text" name="specialization" /></label>
        <label>Nativity: <input type="text" name="nativity" /></label>
    </div>

    <div class="section"><span>4</span>Experience Details</div>
        <div class="inner-wrap">
        <label>Indusrtial Experience: <input type="text" name="exp_ind" /></label>
        <label>Teaching Experience: <input type="text" name="exp_teach" /></label>
        <label>Experience in VIT: <input type="text" name="exp_vit" /></label>
    </div>

    <div class="section"><span>5</span>PhD Student Details</div>
        <div class="inner-wrap">
        <label>Number of PhD students (total): <input type="text" name="phds_number" /></label>
        <label>Number of PhD students in the last 5 years: <input type="text" name="phds_five" /></label>
    </div>


    <div class="button-section">
     <input type="submit" name="Submit" />
    </div>
</form>
</div>
