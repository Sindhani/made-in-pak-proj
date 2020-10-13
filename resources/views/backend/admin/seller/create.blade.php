@extends('layout.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/plugins/forms/wizard.min.css')}}">
@endsection
@section('contents')
    <!-- BEGIN: Content-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form wizard with icon tabs</h4>
                    <a class="heading-elements-toggle"><i
                                class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="#" class="icons-tab-steps wizard">

                            <!-- Step 1 -->
                            <h6><i class="step-icon ft-home"></i> Step 1</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName2">Employee Name :</label>
                                            <input type="text" class="form-control" id="firstName2">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName2">Project Name :</label>
                                            <input type="text" class="form-control" id="lastName2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress3">Email</label>
                                            <input type="email" class="form-control" id="emailAddress3">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location2">Project Location :</label>
                                            <select class="custom-select form-control" id="location2"
                                                    name="location">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber2">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber2">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date2">Date Started :</label>
                                            <input type="date" class="form-control" id="date2">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon ft-file-text"></i>Step 2</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle2">Proposal Title :</label>
                                            <input type="text" class="form-control" id="proposalTitle2">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress4">Email</label>
                                            <input type="email" class="form-control" id="emailAddress4">
                                        </div>
                                        <div class="form-group">
                                            <label for="videoUrl2">Video URL :</label>
                                            <input type="url" class="form-control" id="videoUrl2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle3">Job Title :</label>
                                            <input type="text" class="form-control" id="jobTitle3">
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription2">Short Description :</label>
                                            <textarea name="shortDescription" id="shortDescription2"
                                                      rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon ft-activity"></i>Step 3</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName2">Event Name :</label>
                                            <input type="text" class="form-control" id="eventName2">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventType2">Event Type :</label>
                                            <select class="custom-select form-control" id="eventType2"
                                                    data-placeholder="Type to search cities"
                                                    name="eventType2">
                                                <option value="Banquet">Banquet</option>
                                                <option value="Fund Raiser">Fund Raiser</option>
                                                <option value="Dinner Party">Dinner Party</option>
                                                <option value="Wedding">Wedding</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventLocation2">Event Location :</label>
                                            <select class="custom-select form-control"
                                                    id="eventLocation2" name="location">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Event Date - Time :</label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control datetime"/>
                                                <span class="input-group-addon">
                                                    <span class="ft-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus2">Event Status :</label>
                                            <select class="custom-select form-control" id="eventStatus2"
                                                    name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="status2"
                                                           class="custom-control-input" id="staffing2">
                                                    <label class="custom-control-label" for="staffing2">Staffing</label>
                                                </div>
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="status2"
                                                           class="custom-control-input" id="catering2">
                                                    <label class="custom-control-label" for="catering2">Catering</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 4 -->
                            <h6><i class="step-icon ft-box"></i>Step 4</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meetingName2">Name of Meeting :</label>
                                            <input type="text" class="form-control" id="meetingName2">
                                        </div>

                                        <div class="form-group">
                                            <label for="meetingLocation2">Location :</label>
                                            <input type="text" class="form-control"
                                                   id="meetingLocation2">
                                        </div>

                                        <div class="form-group">
                                            <label for="participants2">Names of Participants</label>
                                            <textarea name="participants" id="participants2" rows="4"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="decisions2">Decisions Reached</label>
                                            <textarea name="decisions" id="decisions2" rows="4"
                                                      class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Agenda Items :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda2"
                                                           class="custom-control-input" id="item21">
                                                    <label class="custom-control-label" for="item21">1st
                                                        item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda2"
                                                           class="custom-control-input" id="item22">
                                                    <label class="custom-control-label" for="item22">2nd
                                                        item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda2"
                                                           class="custom-control-input" id="item23">
                                                    <label class="custom-control-label" for="item23">3rd
                                                        item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda2"
                                                           class="custom-control-input" id="item24">
                                                    <label class="custom-control-label" for="item24">4th
                                                        item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda2"
                                                           class="custom-control-input" id="item25">
                                                    <label class="custom-control-label" for="item25">5th
                                                        item</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('js')
    <script src="{{asset('vendor/theme-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
    <script>
    </script>
@stop

