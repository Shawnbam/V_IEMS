@extends('layouts.master')

@section('title')
    Committees
@endsection
@section('content')
    <div class="col-sm-9 ">
        <h2>Committees</h2><br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="myTab">
            <li role="presentation" class="active"><a href="#IEEE" aria-controls="home" role="tab" data-toggle="tab">IEEE</a></li>
            <li role="presentation"><a href="#CSI" aria-controls="profile" role="tab" data-toggle="tab">CSI</a></li>
            <li role="presentation"><a href="#ACM" aria-controls="messages" role="tab" data-toggle="tab">ACM</a></li>
            <li role="presentation"><a href="#ITSA" aria-controls="settings" role="tab" data-toggle="tab">ITSA</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="IEEE">
                <div class="container-fluid" id="post">

                    <h3>IEEE</h3>
                    <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <div class="col-sm-4">
                        <img src="http://eskipaper.com/images/image-2.jpg" class="img-rounded img-responsive" alt="Cinque Terre">
                    </div>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum quam dui. Aenean luctus metus id arcu molestie elementum. Duis rhoncus, est sed lacinia feugiat, ex purus rutrum nisl, sagittis tincidunt orci lacus at ex. Phasellus molestie dictum tortor, eget ultrices massa lacinia vitae. Proin id laoreet velit, et dictum turpis. Proin viverra, erat sed porttitor gravida, enim justo dictum dui, vitae dignissim justo neque et nulla. Aenean elementum quam sed porta tincidunt. Mauris vitae suscipit libero, sit amet lobortis elit. Nunc condimentum dolor quis purus condimentum, sit amet pretium nulla gravida. Cras sollicitudin justo et magna pellentesque volutpat. Aliquam efficitur, nibh vel iaculis sagittis, diam mauris efficitur dolor, non venenatis sem dui ac felis. Maecenas dignissim ligula sit amet justo finibus, a pretium magna aliquam.

                        Nullam at est mi. Nulla vel egestas enim. Donec id ipsum nec arcu porttitor sodales quis sit amet dolor. Vestibulum et mi ac lectus eleifend ultricies at vitae sapien. Vestibulum ut libero pulvinar, tempus orci id, laoreet odio. Mauris quis accumsan urna. Nunc fermentum velit eu purus tempus blandit. Integer id turpis nisl.

                        In vitae accumsan libero, eu faucibus nisl. Vivamus et ipsum sit amet tellus rhoncus ullamcorper venenatis at elit. Aliquam accumsan aliquet nunc eget pharetra. Curabitur cursus scelerisque urna, at lacinia nisl auctor quis. Vestibulum at rutrum ipsum. Integer rhoncus blandit laoreet. Donec quam sem, hendrerit quis ultricies placerat, posuere vel est. Nam placerat nisl nec tortor consectetur porta. Integer accumsan dictum nunc in dapibus. Sed commodo ornare nulla, et venenatis magna ullamcorper at.
                    </p>

                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="CSI">
                <div class="container-fluid" id="post">

                    <h3>CSI</h3>
                    <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <div class="col-sm-4">
                        <img src="http://eskipaper.com/images/image-2.jpg" class="img-rounded img-responsive" alt="Cinque Terre">
                    </div>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum quam dui. Aenean luctus metus id arcu molestie elementum. Duis rhoncus, est sed lacinia feugiat, ex purus rutrum nisl, sagittis tincidunt orci lacus at ex. Phasellus molestie dictum tortor, eget ultrices massa lacinia vitae. Proin id laoreet velit, et dictum turpis. Proin viverra, erat sed porttitor gravida, enim justo dictum dui, vitae dignissim justo neque et nulla. Aenean elementum quam sed porta tincidunt. Mauris vitae suscipit libero, sit amet lobortis elit. Nunc condimentum dolor quis purus condimentum, sit amet pretium nulla gravida. Cras sollicitudin justo et magna pellentesque volutpat. Aliquam efficitur, nibh vel iaculis sagittis, diam mauris efficitur dolor, non venenatis sem dui ac felis. Maecenas dignissim ligula sit amet justo finibus, a pretium magna aliquam.

                        Nullam at est mi. Nulla vel egestas enim. Donec id ipsum nec arcu porttitor sodales quis sit amet dolor. Vestibulum et mi ac lectus eleifend ultricies at vitae sapien. Vestibulum ut libero pulvinar, tempus orci id, laoreet odio. Mauris quis accumsan urna. Nunc fermentum velit eu purus tempus blandit. Integer id turpis nisl.

                        In vitae accumsan libero, eu faucibus nisl. Vivamus et ipsum sit amet tellus rhoncus ullamcorper venenatis at elit. Aliquam accumsan aliquet nunc eget pharetra. Curabitur cursus scelerisque urna, at lacinia nisl auctor quis. Vestibulum at rutrum ipsum. Integer rhoncus blandit laoreet. Donec quam sem, hendrerit quis ultricies placerat, posuere vel est. Nam placerat nisl nec tortor consectetur porta. Integer accumsan dictum nunc in dapibus. Sed commodo ornare nulla, et venenatis magna ullamcorper at.
                    </p>

                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="ACM">
                <div class="container-fluid" id="post">

                    <h3>ACM</h3>
                    <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <div class="col-sm-4">
                        <img src="http://eskipaper.com/images/image-2.jpg" class="img-rounded img-responsive" alt="Cinque Terre">
                    </div>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum quam dui. Aenean luctus metus id arcu molestie elementum. Duis rhoncus, est sed lacinia feugiat, ex purus rutrum nisl, sagittis tincidunt orci lacus at ex. Phasellus molestie dictum tortor, eget ultrices massa lacinia vitae. Proin id laoreet velit, et dictum turpis. Proin viverra, erat sed porttitor gravida, enim justo dictum dui, vitae dignissim justo neque et nulla. Aenean elementum quam sed porta tincidunt. Mauris vitae suscipit libero, sit amet lobortis elit. Nunc condimentum dolor quis purus condimentum, sit amet pretium nulla gravida. Cras sollicitudin justo et magna pellentesque volutpat. Aliquam efficitur, nibh vel iaculis sagittis, diam mauris efficitur dolor, non venenatis sem dui ac felis. Maecenas dignissim ligula sit amet justo finibus, a pretium magna aliquam.

                        Nullam at est mi. Nulla vel egestas enim. Donec id ipsum nec arcu porttitor sodales quis sit amet dolor. Vestibulum et mi ac lectus eleifend ultricies at vitae sapien. Vestibulum ut libero pulvinar, tempus orci id, laoreet odio. Mauris quis accumsan urna. Nunc fermentum velit eu purus tempus blandit. Integer id turpis nisl.

                        In vitae accumsan libero, eu faucibus nisl. Vivamus et ipsum sit amet tellus rhoncus ullamcorper venenatis at elit. Aliquam accumsan aliquet nunc eget pharetra. Curabitur cursus scelerisque urna, at lacinia nisl auctor quis. Vestibulum at rutrum ipsum. Integer rhoncus blandit laoreet. Donec quam sem, hendrerit quis ultricies placerat, posuere vel est. Nam placerat nisl nec tortor consectetur porta. Integer accumsan dictum nunc in dapibus. Sed commodo ornare nulla, et venenatis magna ullamcorper at.
                    </p>

                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="ITSA">
                <div class="container-fluid" id="post">

                    <h3>ITSA</h3>
                    <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <div class="col-sm-4">
                        <img src="http://eskipaper.com/images/image-2.jpg" class="img-rounded img-responsive" alt="Cinque Terre">
                    </div>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum quam dui. Aenean luctus metus id arcu molestie elementum. Duis rhoncus, est sed lacinia feugiat, ex purus rutrum nisl, sagittis tincidunt orci lacus at ex. Phasellus molestie dictum tortor, eget ultrices massa lacinia vitae. Proin id laoreet velit, et dictum turpis. Proin viverra, erat sed porttitor gravida, enim justo dictum dui, vitae dignissim justo neque et nulla. Aenean elementum quam sed porta tincidunt. Mauris vitae suscipit libero, sit amet lobortis elit. Nunc condimentum dolor quis purus condimentum, sit amet pretium nulla gravida. Cras sollicitudin justo et magna pellentesque volutpat. Aliquam efficitur, nibh vel iaculis sagittis, diam mauris efficitur dolor, non venenatis sem dui ac felis. Maecenas dignissim ligula sit amet justo finibus, a pretium magna aliquam.

                        Nullam at est mi. Nulla vel egestas enim. Donec id ipsum nec arcu porttitor sodales quis sit amet dolor. Vestibulum et mi ac lectus eleifend ultricies at vitae sapien. Vestibulum ut libero pulvinar, tempus orci id, laoreet odio. Mauris quis accumsan urna. Nunc fermentum velit eu purus tempus blandit. Integer id turpis nisl.

                        In vitae accumsan libero, eu faucibus nisl. Vivamus et ipsum sit amet tellus rhoncus ullamcorper venenatis at elit. Aliquam accumsan aliquet nunc eget pharetra. Curabitur cursus scelerisque urna, at lacinia nisl auctor quis. Vestibulum at rutrum ipsum. Integer rhoncus blandit laoreet. Donec quam sem, hendrerit quis ultricies placerat, posuere vel est. Nam placerat nisl nec tortor consectetur porta. Integer accumsan dictum nunc in dapibus. Sed commodo ornare nulla, et venenatis magna ullamcorper at.
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection