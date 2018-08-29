@section("title","Welcome view title")
@extends("layout.main")
@section("css")
    <style>
        .container{
            margin-top: 8em;
        }
        .square{
            height: 45vh;
            text-align: center;
            color: #fff;
        }
        .btn-warning-2{
            background-color:#efb02d ;
            color: #fff;
            border-radius: 8px;
        }
        .card-text{
            font-size: .9em;
        }
    </style>
    @endsection
@section("container")
    <div class="container">
        <div class="row">
            <div class="col-md-4 square square-blue">
                <img src="https://naisaglobal.org/staging/wp-content/uploads/2015/03/work-stat.jpg" alt="">
            </div>
            <div class="col-md-4 square square-blue">
                <img src="https://naisaglobal.org/staging/wp-content/uploads/2015/03/student-stat.jpg" alt="">
            </div>
            <div class="col-md-4 square square-orange">
                <img src="https://naisaglobal.org/staging/wp-content/uploads/2015/04/ceo-stat01.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Increase Asian leadership. Promote diversity.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-warning-2">Join Now</button>
            </div>
        </div>
        <div class="row" style="margin-top: 8em">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="https://naisaglobal.org/staging/wp-content/uploads/2015/04/lacking-leaders-thumbnail.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            WHY WE’RE LACKING ASIAN AMERICAN LEADERSHIP AND WHY WE SHOULD CARE
                        </h5>
                        <p class="card-text">
                            Asian Americans make up around 5% of the U.S. population. Yet the number of Asian Americans in leadership positions is very low—comprising just 2% percent of college presidents, less than 1% of
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="https://naisaglobal.org/staging/wp-content/uploads/2015/04/bamboo-ceiling-thumbnail.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">THE BAMBOO CEILING – TWO SIDES TO BREAKING THROUGH</h5>
                        <p class="card-text">
                            A 2011 study by the Center for Talent Innovation states that, Asian Americans are far more likely to have a college degree than the average person. While they make up only 5% of the population, they
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="https://naisaglobal.org/staging/wp-content/uploads/2015/04/importance-of-mentorship-thumbnail.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">THE IMPORTANCE OF MENTORSHIP</h5>
                        <p class="card-text">
                            To be successful in any field, aspiring leaders require role models and guidance. Strong leadership skills are often attributed to strong mentors; leaders who help show others how to lead. Junior executives and young professionals can typically undervalue
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 4em">
            <div class="col-12 text-center">
                <button class="btn btn-warning-2">Become a Member</button>
            </div>
        </div>
        <div class="row" style="margin-top: 2em;margin-bottom: 5em;">
            <div class="col-12">
                <h2 class="text-center">
                    Recommended News and Media
                </h2>
            </div>
        </div>
    </div>
@endsection