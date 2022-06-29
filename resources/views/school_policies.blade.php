@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "School Policies | " . content('app.name'),
		'description' => 'Every student must follow our school policies. These policies touch on: Illness and Administering Medicine, Jewelry, Haircut etc'
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/school-policies.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">School Policies</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li>School Policies</li>
				</ul>
			</div>
		</div>
		<div class="content-block">

			<div class="intro section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="tabs">
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-1">
									<label class="tab-label" for="2021-2022-term-1">Visitors To The School</label>
									<div class="tab-content">
										<p>
											As required by our Health and Safety Policy, all visitors to the school must report to the reception on arrival. Visitors who are going to be staying on site will be required to sign our visitor’s book and will then be given a badge to wear during their stay. Any visitor who is unknown to the staff and is not wearing a badge will be challenged.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-2">
									<label class="tab-label" for="2021-2022-term-2">Illness and Accidents</label>
									<div class="tab-content">
										<p>
											Should your child become unwell and we feel it necessary to send her/him home, the parent or carer will be informed. If your child’s illness gives us cause for concern, or if they are seriously injured in an accident, the school will arrange for the emergency services to attend school. Your child will be accompanied to the hospital and you will be advised where they have been taken. Our nearest hospital is Mount Zion Hospital.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-3">
									<label class="tab-label" for="2021-2022-term-3">Contact Telephone Numbers</label>
									<div class="tab-content">
										<p>
											It is obviously essential that the school have up-to-date numbers where parents can be contacted during the school day. You will be asked to complete a form giving us that information at the beginning of each school year. Please ensure that we are immediately notified in writing of any changes resulting from change of address or employment. This information will be checked with you at the start of each school year.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-3">
									<label class="tab-label" for="2021-2022-term-3">Administering Medicine</label>
									<div class="tab-content">
										<p>
											The administering of medicines to children is the parents’ responsibility. Very few medications need to be administered in the middle of the day when the child is well enough to attend school. However, should the need arise parents are expected either to keep their child at home or to arrange to administer the medicine personally if they believe the course of treatment to be necessary. Members of staff are not allowed to administer any medicines. The use of throat cough sweets purchased over the counter (i.e. not prescribed by a doctor) by any pupil is prohibited.
											The school should be notified in writing of any asthmatic child who needs to use an inhaler. When brought into school the inhaler must be clearly marked with the child’s name and clear instructions as to use. Please ensure that your child has sufficient inhalers and that the inhalers are in date as this is your responsibility. The school should also be notified in writing if your child suffers from any severe allergies and if there is need of an epipen.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-3">
									<label class="tab-label" for="2021-2022-term-3">Jewellery</label>
									<div class="tab-content">
										<p>
The wearing of jewellery to school is not allowed. Earrings, unless they are studs, give special cause for concern and in order to eliminate the possibility, however slight, of a nasty accident happening, we strongly advise parents to ensure that their children do not wear such jewellery to school. If a child wears a cross and a chain around their neck then it must be worn under the dress or shirt. Chains and watches must be removed during physical education lessons for reasons of safety. No member of staff will accept responsibility for looking after such items of jewellery and the school will accept no responsibility for their loss or damage however caused.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-3">
									<label class="tab-label" for="2021-2022-term-3">Hair</label>
									<div class="tab-content">
										<p>
Long hair can be dangerous when falling over the face by impairing vision. For safety reasons we ask that long hair should be tied back all the time during P.E. lessons. During swimming lessons long hair should be covered by a swimming hat.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 d-none d-md-block">
							<div class="pattern-diagonal-lines-sm clr-2">
							<img src="{{ asset('images/policies.jpg') }}" style="width: 100%; transform:translate(30px, -30px);" />
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection
