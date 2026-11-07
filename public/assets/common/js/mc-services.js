/* ============================================================
   Mag City – Services page (hub + service detail pages)
   Mounts into <div id="mc-services"></div> using a Shadow DOM,
   so it cannot clash with (or be changed by) the site's own
   header/footer styles. Detail pages use /services#service-id.
   ============================================================ */
(function () {
  'use strict';

  var host = document.getElementById('mc-services');
  if (!host || host.shadowRoot) return;

  var SCRIPT = document.currentScript;
  var BASE = SCRIPT && SCRIPT.src ? SCRIPT.src.replace(/[^\/?#]*([?#].*)?$/, '') : '/assets/services/';

  /* ---------- settings you may want to edit ---------- */
  var CFG = {
    book: 'https://new.magcitysys.com/book',
    whatsapp: 'https://wa.me/94769015261',
    contact: 'tel:+94114734020',
    siteImages: '/assets/common/images/'                        // existing site images (vehicle photos)
  };

  /* ---------- content ---------- */
  var S=[
{id:"wheel-alignment",nav:"Wheel Alignment",eb:"TYRES, WHEELS & ALIGNMENT",bc:"Wheels & Car Care",t:"Wheel Alignment",btn:"Book Wheel Alignment",cta:"Wheel Alignment",
d:"Wheel alignment adjusts your vehicle's wheel angles to manufacturer specifications, helping improve steering stability, tyre wear and overall handling.",
ben:["Improved Steering Stability","Even Tyre Wear","Better Fuel Efficiency","Safer Driving Experience"],
when:"Wheel alignment may be needed if your vehicle is pulling to one side, the steering wheel feels off-centre, or you notice uneven tyre wear. It is also recommended after hitting a pothole, kerb or if suspension components have been replaced.",
sym:["Vehicle pulling left or right","Steering wheel off-centre","Uneven or rapid tyre wear","Unstable handling at higher speeds","Steering feels loose or unclear"],
ins:["Wheel alignment angles","Tyre condition and wear patterns","Suspension components","Steering components","Bushings and mounts","Wheel bearings (visual inspection)","Tyres and rims","Visible damage or excessive play"],
inc:["Full 4-Wheel Alignment|Adjustment to manufacturer specifications using our 3D alignment system.","Steering & Suspension Inspection|Check for worn or damaged components.","Tyre Wear Assessment|Review of tyre condition and wear patterns.","Adjustment & Final Check|Precise adjustment and test for correct alignment."],
proc:["Vehicle Inspection|Assess steering, suspension and tyre condition.","Alignment Check|Measure current alignment angles.","Adjust to Specification|Adjust wheel angles to manufacturer standards.","Final Test|Road test and final check for accuracy."],
why:["Longer Tyre Life|Reduces uneven wear and extends tyre lifespan.","Better Handling|Improves steering stability and control.","Improved Fuel Efficiency|Helps reduce rolling resistance.","Greater Safety|More predictable and stable handling."],
faq:["How often should I get a wheel alignment?|Follow your manual, and have it checked after a pothole or kerb impact, new tyres or suspension work.","What causes misalignment?|Potholes, kerb strikes, worn suspension or steering parts and ride height changes.","Will wheel alignment fix pulling to one side?|Often yes. If the pull continues we check tyres, brakes and suspension.","Do you also check suspension components?|Yes, steering and suspension are inspected as part of the service.","Can I include wheel alignment with other services?|Yes, it can be added to a full service or suspension repair."],
rel:["Tyre Services|New tyres, repair and replacement.","Wheel Balancing|Balances wheels for smoother driving.","Suspension Repair|Repairs to suspension components for better handling."]},
{id:"atf-changing",nav:"ATF Changing",eb:"TRANSMISSION CARE",bc:"Running Repairs",t:"ATF Changing",btn:"Book ATF Change",cta:"ATF Change",
d:"Replacing the fluid in your automatic gearbox with the correct fluid for your vehicle, to keep gear changes smooth and the transmission protected.",
ben:["Smoother Gear Changes","Transmission Protection","Correct Fluid for Your Model","Longer Gearbox Life"],
when:"ATF breaks down with heat and use. A change is due at the interval in your owner's manual, and sooner if shifts feel harsh, delayed or slipping, or the fluid looks dark or smells burnt.",
sym:["Harsh or jerky gear changes","Delay shifting into Drive or Reverse","Gear slipping or revving without pulling","Dark or burnt-smelling fluid","Gearbox noise or whining"],
ins:["ATF level and colour","Fluid smell and condition","Gearbox and seal leaks","Fluid cooler lines","Gearbox mounts","Transmission fault codes","Shift behaviour on test drive","Filter condition where applicable"],
inc:["Fluid Condition Check|Level, colour and smell.","ATF Change|Old fluid removed, correct fluid refilled.","Leak & Mount Check|Seals, lines and mounts.","Road Test|Gear shift check after the change."],
proc:["Check Fluid|Inspect level and condition.","Drain & Replace|Remove old ATF, refill to specification.","Inspect|Check for leaks and warning codes.","Road Test|Confirm smooth shifting."],
why:["Smoother Driving|Cleaner fluid, cleaner shifts.","Less Wear|Protects clutches and internal parts.","Avoid Costly Repairs|Gearbox repairs are expensive.","Reliability|A healthier transmission long term."],
faq:["How often should ATF be changed?|Follow your manual's schedule; our team can advise by model.","Which fluid do you use?|The type specified for your vehicle.","Will it fix a slipping gearbox?|Fresh fluid helps in some cases. A worn gearbox may need further repair.","Can I do it with a full service?|Yes.","Do you change ATF on hybrids?|Confirm model coverage with your branch."],
rel:["Vehicle Service|Full service for all brands.","Engine Overhauls & Repairs|Diagnosis to full overhaul.","Electrical Repairs|Computerised fault finding."]},
{id:"brake-repairs",nav:"Brake Repairs",eb:"SAFETY & BRAKING",bc:"Running Repairs",t:"Brake Repairs",btn:"Book Brake Check",cta:"Brake Check",
d:"Inspection and repair of your braking system by trained technicians using genuine spares, so you can stop confidently every time.",
ben:["Stopping Confidence","Safer Driving","Genuine Spares","Quiet, Smooth Braking"],
when:"Brakes wear with every journey. Get them checked if you hear squealing or grinding, feel vibration in the pedal or steering, or notice the pedal feels soft or the vehicle takes longer to stop.",
sym:["Squealing or grinding when braking","Vibration through pedal or steering","Soft or sinking brake pedal","Pulls to one side when braking","Brake warning light on"],
ins:["Brake pads and linings","Discs and drums","Brake fluid level and condition","Calipers and wheel cylinders","Hoses and lines","Handbrake operation","Wheel bearings","ABS warning status"],
inc:["Brake System Inspection|Pads, discs, fluid and lines.","Pad & Disc Replacement|Fitted with genuine spares.","Brake Fluid Change|Restores pedal feel.","Road Test|Final brake check."],
proc:["Inspect|Check wear, leaks and noise.","Quote & Approve|Explain what needs replacing and why.","Repair|Fit genuine spares and bleed the system.","Test|Road test and final safety check."],
why:["Safety First|Braking is your most important safety system.","Protect Other Parts|Worn pads can damage discs.","Predictable Stopping|Even, controlled braking.","Lower Repair Cost|Early replacement costs less."],
faq:["How do I know brakes need replacing?|Noise, vibration, a soft pedal or longer stopping distance are common signs.","Do you use genuine parts?|Yes, genuine spares are used.","How long does a brake job take?|Depends on the work. Your branch confirms at check-in.","Can you fix a brake warning light?|We diagnose the cause first, then repair.","Can I add wheel alignment or a service?|Yes, in the same visit."],
rel:["Suspension Repairs|Shocks, arms and bushes.","Wheel Alignment|3D alignment to specification.","Vehicle Service|Full service for all brands."]},
{id:"suspension-repairs",nav:"Suspension Repairs",eb:"RIDE & HANDLING",bc:"Running Repairs",t:"Suspension Repairs",btn:"Book Suspension Check",cta:"Suspension Check",
d:"Repair and replacement of shock absorbers, arms, bushes and related components for a stable, comfortable and controlled ride.",
ben:["Smoother, More Comfortable Ride","Better Handling & Control","Even Tyre Wear","Safer Driving"],
when:"Rough roads wear suspension components over time. Get it checked if the ride feels bouncy or harsh, you hear knocking over bumps, the vehicle leans in corners, or a tyre wears unevenly.",
sym:["Knocking or clunking over bumps","Bouncy or harsh ride","Leans or dips when cornering or braking","Uneven tyre wear","Steering feels loose or vague"],
ins:["Shock absorbers and struts","Control arms and ball joints","Bushes and mounts","Springs","Stabiliser bar and links","Steering rack and tie rod ends","Tyres and wear patterns","Wheel alignment angles"],
inc:["Suspension Inspection|Full check of components.","Component Replacement|Shocks, arms, bushes and links with genuine spares.","Steering Check|Rack and tie rods.","Wheel Alignment|Recommended after suspension work."],
proc:["Inspect|Road test and lift inspection.","Quote & Approve|Explain worn parts and cost.","Repair|Replace components to specification.","Align & Test|Alignment and final road test."],
why:["Comfort|Absorbs road shocks properly.","Control|Keeps tyres in contact with the road.","Tyre Life|Avoids uneven wear.","Safety|Stable braking and cornering."],
faq:["How do I know my suspension is worn?|Knocking noises, a bouncy ride and uneven tyre wear are typical signs.","Do I need wheel alignment after suspension repair?|Usually yes, so we recommend it.","Do you repair all makes?|Yes, all brands, using genuine spares.","Is it safe to drive with worn suspension?|It affects braking and handling, so get it checked soon.","Can you inspect it with a service?|Yes."],
rel:["Wheel Alignment|3D alignment to specification.","Brake Repairs|Inspection and repair.","Vehicle Service|Full service for all brands."]},
{id:"engine-overhauls",nav:"Engine Overhauls",eb:"ENGINE WORKSHOP",bc:"Running Repairs",t:"Engine Overhauls & Repairs",btn:"Book Engine Check",cta:"Engine Check",
d:"From fault diagnosis to complete engine overhauls, carried out by qualified technicians with computerised equipment and genuine spares.",
ben:["Accurate Diagnosis","Genuine Spares","All Makes & Models","Restored Performance"],
when:"Engine work is needed when the engine loses power, overheats, burns oil, makes unusual noises or fails to start reliably. A scan and inspection will show whether a repair or full overhaul is the right answer.",
sym:["Loss of power or rough running","Overheating","Oil leaks or blue/white smoke","Knocking or ticking noises","Check engine light on"],
ins:["Engine fault codes","Compression and engine condition","Oil leaks and gaskets","Cooling system and radiator","Timing belt or chain","Fuel system and injectors","Drive belts and hoses","Engine mounts"],
inc:["Engine Scanning|Fault codes and live data.","Engine Repairs|Gaskets, belts, cooling and fuel components.","Engine Overhaul|Full strip-down and rebuild where needed.","Test & Verify|Re-scan and road test."],
proc:["Diagnose|Scan and inspect.","Quote & Approve|Explain the repair or overhaul scope.","Repair / Overhaul|Using genuine spares.","Test & Hand Over|Run, re-scan and road test."],
why:["Restored Power|Smoother, stronger running.","Avoid Breakdowns|Fix faults before they stop you.","Better Fuel Economy|An efficient engine.","Longer Vehicle Life|Protects your investment."],
faq:["Do you do full engine overhauls?|Yes, engine overhauls and repairs are offered.","Will you diagnose before quoting?|Yes, a scan and inspection come first.","Do you repair diesel and hybrid engines?|Confirm model coverage with your branch.","Which parts do you use?|Genuine spares.","How long will it take?|Depends on the work. We estimate after diagnosis."],
rel:["Vehicle Tune Up|Scanning, EFI and diesel tune ups.","Vehicle Service|Full service for all brands.","ATF Changing|Transmission fluid change."]},
{id:"ac-repairs",nav:"A/C Repairs",eb:"COMFORT & COOLING",bc:"Running Repairs",t:"A/C Repairs",btn:"Book A/C Check",cta:"A/C Check",
d:"Diagnosis and repair of your vehicle's air conditioning so the cabin stays cool and comfortable, even in Sri Lanka's heat.",
ben:["Cool, Comfortable Cabin","Clean, Fresh Air","Accurate Diagnosis","All Makes & Models"],
when:"Get your A/C checked if it blows warm air, cools slowly, makes noise, smells musty or the airflow weakens. Early attention often prevents a larger compressor repair.",
sym:["Warm or weak cooling","Weak airflow","Musty or unpleasant smell","Noise when the A/C is on","Water leaking inside the cabin"],
ins:["Refrigerant level and leaks","Compressor operation","Condenser and radiator fan","Evaporator and cabin filter","Hoses and connections","Blower motor","Pressure readings","Cabin vent temperature"],
inc:["A/C Performance Check|Pressure and temperature test.","Leak Detection & Regas|Locate leaks, refill refrigerant.","Component Repair|Compressor, condenser, blower and more.","Cabin Filter & Clean-Up|Fresher air."],
proc:["Test|Measure cooling and pressures.","Diagnose|Find the cause.","Repair|Fix or replace the faulty parts.","Verify|Confirm cold, steady airflow."],
why:["Comfort|Cool cabin in traffic and heat.","Healthier Air|Clean filters, no musty smell.","Lower Repair Cost|Early fixes protect the compressor.","Better Visibility|Demists the windscreen quickly."],
faq:["Why is my A/C not cold?|Common causes are low refrigerant, a leak or a faulty compressor. A test finds the cause.","Do you regas?|Confirm with your branch.","Why does it smell?|Often a dirty cabin filter or evaporator.","Do you repair all makes?|Yes, all brands.","Can I do it with a service?|Yes."],
rel:["Electrical Repairs|Computerised fault finding.","Vehicle Tune Up|Engine scanning and tune ups.","Vehicle Service|Full service for all brands."]},
{id:"electrical-repairs",nav:"Electrical Repairs",eb:"AUTO ELECTRICAL",bc:"Running Repairs",t:"Electrical Repairs",btn:"Book Electrical Check",cta:"Electrical Check",
d:"Computerised diagnosis and repair of your vehicle's electrical system, from batteries and lights to sensors and wiring.",
ben:["Computerised Fault Finding","Reliable Starting & Charging","Genuine Spares","All Makes & Models"],
when:"Modern vehicles rely on electronics. Get a check if the battery keeps going flat, lights flicker, warning lights come on, windows or central locking fail, or the engine is hard to start.",
sym:["Battery going flat repeatedly","Difficulty starting","Flickering or failed lights","Windows or central locking not working","Warning lights on the dashboard"],
ins:["Battery condition and charge","Alternator output","Starter motor","Wiring and connectors","Fuses and relays","Lights and switches","Sensor and module fault codes","Hybrid system status where applicable"],
inc:["Computerised Scan|Read fault codes.","Battery & Charging Test|Battery, alternator, starter.","Wiring & Component Repair|Wiring, relays, switches, sensors.","Final Function Check|Confirm all systems work."],
proc:["Scan & Test|Read codes and test the system.","Diagnose|Trace the fault.","Repair|Fix or replace with genuine spares.","Verify|Clear codes and re-test."],
why:["Reliable Starts|Avoid being stranded.","Safety|Lights and signals working properly.","Protect Electronics|Small faults can damage modules.","Less Guesswork|Scanning finds the real cause."],
faq:["Why does my battery keep going flat?|Could be an old battery, a faulty alternator or a drain. We test all three.","Can you fix warning lights?|We scan, diagnose the cause, then repair.","Do you work on hybrids?|Hybrid scanning is offered. Confirm model coverage.","Do you repair all makes?|Yes.","Can I combine it with a service?|Yes."],
rel:["A/C Repairs|Diagnosis and repair.","Vehicle Tune Up|Engine scanning and tune ups.","Engine Overhauls & Repairs|Diagnosis to full overhaul."]},
{id:"vehicle-service",nav:"Vehicle Service",eb:"SERVICING & MAINTENANCE",bc:"Servicing & Maintenance",t:"Vehicle Service",btn:"Book a Service",cta:"Full Service",
d:"Full servicing for all brands, including hybrid and plug-in hybrid models, using genuine oils, oil filters and manufacturer-recommended specifications.",
ben:["Genuine Oils & Filters","Hybrid & PHEV Ready","Manufacturer-Recommended Specs","Longer Engine Life"],
when:"Your vehicle is due for a service at the interval in the manufacturer's schedule, by distance or time, whichever comes first. A regular full service keeps the engine protected and helps avoid unexpected breakdowns.",
sym:["Service reminder light is on","Engine oil dark or low","Engine sounds rougher than usual","Fuel consumption has crept up","Past the recommended interval"],
ins:["Engine oil level and condition","Oil and air filters","Brake fluid and coolant","Brake pads and discs","Tyres and tyre pressure","Battery condition","Belts and hoses","Lights, wipers and fluid top-ups"],
inc:["Oil & Filter Change|Genuine oil and oil filter.","Fluid Top-Ups & Checks|Brake fluid, coolant, washer fluid.","Multi-Point Inspection|Brakes, tyres, battery, lights.","Model-Specific Packages|Set prices for popular models."],
proc:["Check-In|Record mileage and your concerns.","Service & Replace|Oil, filters and fluids to specification.","Inspection|Multi-point check with findings noted.","Final Check|Recommendations shared before you leave."],
why:["Engine Protection|Clean oil reduces wear.","Better Fuel Economy|A well-maintained engine runs efficiently.","Higher Resale Value|A documented service history.","Fewer Surprise Repairs|Issues caught early."],
faq:["How often should I service my vehicle?|Follow your owner's manual. We can advise for your model.","Which oils do you use?|Manufacturer-recommended oils with genuine oil filters.","Do you service hybrids and plug-in hybrids?|Yes.","Can I see the price before booking?|Prices are published for popular models. Others are quoted on request.","Can you add a wheel alignment or A/C check?|Yes, in the same visit."],
rel:["Running Repairs|Wheel alignment, brakes and more.","Vehicle Tune Up|Scanning and tune ups.","Vehicle Detailing|Inside and out."]},
{id:"tune-up",nav:"Tune Up",eb:"ENGINE PERFORMANCE",bc:"Servicing & Maintenance",t:"Vehicle Tune Up",btn:"Book a Tune Up",cta:"Tune Up",
d:"Computerised engine scanning, injector cleaning and tune ups for petrol, diesel and hybrid engines to restore performance and improve fuel economy.",
ben:["Improved Fuel Economy","Smoother Performance","Lower Emissions","Computerised Accuracy"],
when:"A tune up helps when the engine feels sluggish, idles roughly, uses more fuel than before or shows a check-engine light. Each engine type has its own needs, so the work starts with a computerised scan.",
sym:["Check engine light on","Rough or unstable idle","Hesitation when accelerating","Higher fuel consumption","Black smoke from a diesel"],
ins:["Engine fault codes","Fuel injectors","Air intake and filters","Spark plugs (petrol)","Fuel pressure and delivery","Sensors and connections","A/C performance","Battery and charging system"],
inc:["Engine Scanning|All models.","EFI Engine Tune Up|Electronic fuel injection petrol engines.","Common Rail Diesel Tune Up|Diesel engines.","Electronic Injector Cleaning|Restores the correct spray pattern."],
proc:["Scan|Read fault codes and live data.","Diagnose|Find what is affecting performance.","Tune & Clean|Injector cleaning and tune up work.","Verify|Re-scan and road test."],
why:["Fuel Savings|Efficient combustion uses less fuel.","Responsive Drive|Smoother acceleration and idle.","Engine Health|Clean injectors reduce strain.","Fewer Warning Lights|Faults found before they escalate."],
faq:["What is an engine scan?|A computer reads fault codes and live data from your engine system.","Do you tune diesel engines?|Yes, including common rail diesel.","Will it reduce my fuel bill?|It aims to improve economy where poor tuning or dirty injectors are the cause.","Do you tune hybrids?|Confirm model coverage with your branch.","How long does it take?|Your branch gives an estimate at check-in."],
rel:["Vehicle Service|Full service for all brands.","Running Repairs|Engine and electrical repairs.","Vehicle Detailing|Engine room cleaning."]},
{id:"collision-repairs",nav:"Collision Repairs",eb:"ACCIDENT REPAIRS",bc:"Repairs",t:"Collision Repairs",btn:"Book a Repair",cta:"Collision Repair",
d:"Accident repairs to manufacturer standards, with computerised paint matching, heated booth painting and a 3 year warranty on every paint job.",
ben:["1-Day Minor Accident Service","3 Year Paint Warranty","Exact Colour Match","Free Pick Up & Delivery"],
when:"Collision repair covers any accident damage, from a scraped bumper or dented door to larger panel damage. Minor accident repairs can be done in a single day, with free home or office pick up and delivery.",
sym:["Dents or creases in panels","Scratches or scraped paint","Cracked or misaligned bumper","Uneven panel gaps","Faded or peeling paint"],
ins:["Panel and body damage","Paint condition and colour code","Bumpers and trims","Door, bonnet and boot alignment","Lights and lenses","Underbody and chassis","Structural alignment","Related mechanical damage"],
inc:["Computerised Paint Mixing|Matched to the manufacturer's paint code.","Heated Booth Painting|Water-based and 2K paint.","Dent Pulling & Infrared Drying|Japanese Ishihara dent pulling.","Pick Up, Delivery & Warranty|Free pick up and delivery, 3 year paint warranty."],
proc:["Assess Damage|Inspect and quote.","Repair|Dent pulling and panel work.","Paint|Colour match, booth painting, infrared drying.","Final Check|Quality check, then delivery to you."],
why:["Seamless Finish|No visible repair lines or colour mismatch.","Lasting Protection|Quality paint helps protect against rust.","Safe Structure|Repairs to manufacturer standards.","Resale Value|A clean, original-looking finish."],
faq:["How long does a minor accident repair take?|Minor repairs can be completed in one day.","Is the colour matched exactly?|Paint is mixed by computer to the manufacturer's paint code.","What warranty do I get?|3 years on all paint jobs.","Do you collect my vehicle?|Free home or office pick up and delivery is offered.","Can you work with my insurance company?|Confirm claim handling with your branch."],
rel:["Vehicle Detailing|Cut, polish and wax.","Vehicle Service|Full service for all brands.","Running Repairs|Mechanical repairs."]},
{id:"vehicle-detailing",nav:"Detailing",eb:"CAR CARE",bc:"Wheels & Car Care",t:"Vehicle Detailing",btn:"Book Detailing",cta:"Detailing",
d:"Professional detailing using 3M and other world-renowned car care products, to make your vehicle look brand new inside and out.",
ben:["Showroom Finish","Premium Products (3M)","Fresh, Clean Interior","Protected Paint"],
when:"Detailing suits a vehicle with dull paint, light swirl marks, a tired interior, hazy headlamps or a dirty engine bay. It's also popular before selling, after a collision repair or ahead of a special occasion.",
sym:["Dull or faded paint","Swirl marks and light scratches","Yellowed or foggy headlamps","Stained or smelly interior","Glare on the windscreen at night"],
ins:["Exterior paint condition","Upholstery and carpets","Dashboard and trims","Windscreen and glass","Headlamp lenses","Engine bay","Wheels and tyres","Door jambs and edges"],
inc:["Cut & Polishing|Restores paint depth and gloss.","Interior Cleaning|Seats, carpets, dashboard.","Waxing & Glare Reduction|Shine and clearer night vision.","Headlamp & Engine Room|Clear lenses, clean engine bay."],
proc:["Inspect|Check paint, interior and condition.","Clean & Prepare|Wash, decontaminate, interior clean.","Cut, Polish & Wax|Correct and protect the paint.","Final Finish|Detail pass and hand over."],
why:["Looks Brand New|Restored gloss and a fresh interior.","Paint Protection|Wax shields against sun and dirt.","Better Visibility|Clear headlamps, less glare.","Higher Resale Value|A well-kept vehicle sells faster."],
faq:["Which products do you use?|3M and other world-renowned car care brands.","How long does detailing take?|Depends on the package. Your branch confirms at booking.","Can detailing remove scratches?|Cut and polishing removes light marks. Deep scratches need paint repair.","Do you clean the engine bay?|Yes, engine room cleaning is offered.","Does it include waxing?|Yes, waxing is part of the detailing service."],
rel:["Collision Repairs|Body and paint.","Vehicle Service|Full service for all brands.","Accessories|Upgrades and fitting."]},
{id:"accessories",nav:"Accessories",eb:"UPGRADES & ACCESSORIES",bc:"Wheels & Car Care",t:"Vehicle Accessories",btn:"Enquire Now",cta:"Upgrade",
d:"Everything to improve how your vehicle looks and works, available for all makes and models.",
ben:["Wide Range","Professional Fitting","All Makes & Models","Style & Function"],
when:"Accessories are for protecting the interior, adding comfort, improving visibility and safety, or personalising your vehicle. New tyres and alloy wheels are available here too.",
sym:["Seat covers","Window tinting","TV / DVD and GPS","Reverse camera","Alloy wheels and tyres"],
ins:["Seat covers","Carpets","Window tinting","TV and DVD players","GPS","Reverse camera","Car perfumes","Tyres and alloy wheels"],
inc:["Interior|Seat covers, carpets, perfumes.","Window Tinting|Privacy and heat reduction.","Entertainment & Navigation|TV, DVD, GPS.","Safety & Wheels|Reverse camera, tyres, alloy wheels."],
proc:["Choose|Pick products with our team.","Confirm Fit|Check compatibility with your model.","Fit|Professional installation.","Test|Function check and hand over."],
why:["Comfort|A better cabin.","Safety|Reverse camera and clearer visibility.","Protection|Covers and carpets protect the original trim.","Personal Style|Make the vehicle yours."],
faq:["Do you fit what you sell?|Confirm fitting and charges with your branch.","Do accessories fit all models?|Available for all brands. We confirm fit for your model.","Can I get tyres here?|Yes, tyres and alloy wheels are listed.","Is window tinting available?|Yes.","Can I fit accessories during a service?|Usually yes. Ask when you book."],
rel:["Vehicle Detailing|Inside and out.","Running Repairs|Wheel alignment and more.","Vehicle Service|Full service."]}
];

  var CATS = [['Servicing & Maintenance', ['vehicle-service', 'atf-changing', 'tune-up']], ['Repairs', ['brake-repairs', 'suspension-repairs', 'engine-overhauls', 'ac-repairs', 'electrical-repairs', 'collision-repairs']], ['Wheels & Car Care', ['wheel-alignment', 'vehicle-detailing', 'accessories']]];
  var SY = [['Brakes squealing', 'brake-repairs'], ['A/C not cold', 'ac-repairs'], ['Steering pulling to one side', 'wheel-alignment'], ['Clunking over bumps', 'suspension-repairs'], ['Battery keeps going flat', 'electrical-repairs'], ['Harsh gear changes', 'atf-changing'], ['Check engine light on', 'tune-up'], ['Dents or scratches', 'collision-repairs'], ['Dull or faded paint', 'vehicle-detailing'], ['Need a service', 'vehicle-service']];
  var PR = [['Toyota Hilux', 19170, 'Toyota 10W30'], ['Suzuki Wagon R', 11390, 'Toyota 10W30'], ['Toyota Aqua', 11390, 'Toyota 10W30'], ['Honda Vezel', 12880, 'Hav Eco 5'], ['Toyota C-HR', 12880, 'Hav Eco 5'], ['Toyota Prado (Petrol)', 16070, 'Toyota 10W30'], ['Toyota Prado (Diesel)', 19170, 'Toyota 10W30'], ['MG Crossover', 12880, 'Hav Eco 5']];
  var V = ['v-hilux', 'v-wagon-r', 'v-aqua', 'v-vezel', 'v-chr', 'v-prado', 'v-prado', 'v-mg-zs'];
  var P = { 'wheel-alignment': ['p16', 'p14', 'p13'], 'atf-changing': ['p9', 'p12', 'p13'], 'brake-repairs': ['p4', 'p10', 'p14'], 'suspension-repairs': ['p10', 'p4', 'p12'], 'engine-overhauls': ['p21', 'p13', 'p9'], 'ac-repairs': ['p19', 'p12', 'p14'], 'electrical-repairs': ['p20', 'p12', 'p14'], 'vehicle-service': ['p14', 'p9', 'p12'], 'tune-up': ['p13', 'p12', 'p9'], 'collision-repairs': ['p2', 'p8', 'p3'], 'vehicle-detailing': ['p6', 'p7', 'p15'], 'accessories': ['p1', 'p15', 'p14'] };
  var RM = { 'Running Repairs': 'services', 'Tyre Services': 'services', 'Wheel Balancing': 'services', 'Vehicle Tune Up': 'tune-up', 'Suspension Repair': 'suspension-repairs' };
  var NV = [['when', 'When you need it'], ['sym', 'Symptoms'], ['ins', 'What we inspect'], ['inc', 'Included'], ['proc', 'Process'], ['why', 'Why it matters'], ['faq', 'FAQ']];
  var BR = [['Colombo', '0114734020'], ['Galle', '0912228388'], ['Nugegoda', '0112199799'], ['Ratmalana', '0112626333'], ['Gatambe', '0812388699'], ['Negombo', '']];
  var BS = ["<svg viewBox='0 0 24 24' aria-hidden='true'><path d='M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6z'/><path d='M9 12l2 2 4-4'/></svg>", "<svg viewBox='0 0 24 24' aria-hidden='true'><circle cx='12' cy='12' r='9'/><path d='M8 12l3 3 5-6'/></svg>", "<svg viewBox='0 0 24 24' aria-hidden='true'><path d='M4 17a8 8 0 1116 0'/><path d='M12 17l4-5'/><path d='M4 17h16'/></svg>", "<svg viewBox='0 0 24 24' aria-hidden='true'><path d='M14.5 6.5a4 4 0 00-5.2 5.2L4 17l3 3 5.3-5.3a4 4 0 005.2-5.2l-2.7 2.7-2.3-.7-.7-2.3z'/></svg>"];

  /* ---------- helpers ---------- */
  var ORIG_TITLE = document.title;
  var metaDesc = document.querySelector('meta[name="description"]');
  var ORIG_DESC = metaDesc ? metaDesc.getAttribute('content') : null;

  var p = function (x) { return x.split('|'); };
  var g = function (id) { for (var i = 0; i < S.length; i++) if (S[i].id === id) return S[i]; return null; };
  var pf = function (id) { return P[id] || []; };
  var PATH = location.pathname;
  var href = function (id) { return PATH + (id && id !== 'services' ? '#' + id : ''); };
  var ext = function (u) { return "href='" + u + "' target='_blank' rel='noopener'"; };
  var tel = function (t) { return 'tel:+94' + t.slice(1); };
  var isOpen = function () {
    try {
      var o = {};
      new Intl.DateTimeFormat('en-US', { timeZone: 'Asia/Colombo', weekday: 'short', hour: 'numeric', hour12: false }).formatToParts(new Date()).forEach(function (x) { o[x.type] = x.value; });
      var h = +o.hour % 24;
      return o.weekday === 'Sun' ? false : o.weekday === 'Sat' ? h >= 8 && h < 14 : h >= 8 && h < 18;
    } catch (e) { return false; }
  };
  var ph = function (label, file, eager) {
    var img = file ? "<img src='" + BASE + '../images/services/' + file + ".jpg' alt='" + label + "' decoding='async' " + (eager ? "fetchpriority='high'" : "loading='lazy'") + '>' : '';
    return "<div class='ph'>" + img + '</div>';
  };
  var sh = function (t, pp) { return "<div class='sh'><h2>" + t + '</h2>' + (pp ? "<p class='mut'>" + pp + '</p>' : '') + '</div>'; };

  /* ---------- shell ---------- */
  var root = host.attachShadow({ mode: 'open' });
  root.innerHTML =
    '<style>:host{display:block;min-height:70vh}.mc{visibility:hidden}</style>' +
    "<link rel='stylesheet' href='" + BASE + "../css/mc-services.css'>" +
    "<div class='mc'><div class='sw w' id='sw'></div><div id='app'></div></div>";
  var mc = root.querySelector('.mc'), A = root.getElementById('app'), SW = root.getElementById('sw');
  var reveal = function () { mc.style.visibility = 'visible'; };
  var lk = root.querySelector('link');
  lk.addEventListener('load', reveal); lk.addEventListener('error', reveal); setTimeout(reveal, 2500);

  if (!document.querySelector('link[href*="family=Barlow"]')) {
    var f = document.createElement('link');
    f.rel = 'stylesheet'; f.href = 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap';
    document.head.appendChild(f);
  }

  /* broken photos just disappear, leaving the gradient behind */
  root.addEventListener('error', function (e) { if (e.target && e.target.tagName === 'IMG') e.target.remove(); }, true);

  /* ---------- views ---------- */
  var chips = function () { return SY.map(function (x) { return "<a class='chip' data-r href='" + href(x[1]) + "'>" + x[0] + '</a>'; }).join(''); };
  var sc = function (id) { var s = g(id); return "<a class='cd' data-r href='" + href(id) + "' style='text-decoration:none;color:inherit'>" + ph(s.t, pf(id)[0]) + "<div class='t'><b>" + s.t + '</b></div></a>'; };
  var cats = function () { return CATS.map(function (c) { return "<h2 style='margin:26px 0 12px'>" + c[0] + "</h2><div class='g3'>" + c[1].map(sc).join('') + '</div>'; }).join(''); };
  var pick = function () {
    return "<div class='cd' style='padding:20px'><h2>Full Service Price</h2><label class='mut' for='pv'>Choose your vehicle:</label><select id='pv'>" +
      PR.map(function (x, i) { return "<option value='" + i + "'>" + x[0] + '</option>'; }).join('') + "</select><div id='po' aria-live='polite'></div></div>";
  };
  function pp() {
    var sel = root.getElementById('pv'), po = root.getElementById('po'); if (!sel || !po) return;
    var i = +sel.value, x = PR[i];
    po.innerHTML = "<img src='" + CFG.siteImages + V[i] + ".jpg' alt='' style='width:100%;max-height:150px;object-fit:contain'><div class='pr'>Rs. " + x[1].toLocaleString('en-US') + ".00</div><span class='mut'>Labour, " + x[2] + " oil and oil filter included. Confirm with your branch.</span><p><a class='btn' " + ext(CFG.book) + '>Book This Service →</a></p>';
  }

  function renderHub() {
    SW.innerHTML = '';
    A.innerHTML = "<section class='al'><div class='w'><h2>What's the problem?</h2><div style='margin-top:12px'>" + chips() + '</div></div></section>' +
      "<section><div class='w'>" + cats() + '</div></section>' +
      "<section class='al'><div class='w g2'><div><h2>Full service prices</h2><p class='mut'>Pick your vehicle to see the price.</p></div>" + pick() + '</div></section>';
    pp();
  }

  function renderSvc(id) {
    var s = g(id), op = isOpen(), pics = pf(s.id);
    var ct = CATS.filter(function (c) { return c[1].indexOf(s.id) > -1; })[0] || CATS[0];
    SW.innerHTML = "<div class='swt'>" + CATS.map(function (c) { return "<a data-r href='" + href(c[1][0]) + "' class='" + (c[0] === ct[0] ? 'on' : '') + "'>" + c[0] + '</a>'; }).join('') + "</div><div class='swp'>" + ct[1].map(function (i) { return "<a data-r href='" + href(i) + "' class='" + (i === s.id ? 'on' : '') + "'>" + g(i).nav + '</a>'; }).join('') + '</div>';
    var nav = function (cls) { return NV.map(function (n) { return "<a href='#" + n[0] + "' data-go='" + n[0] + "' data-t='" + n[0] + "'>" + (cls === 'rail' ? '<span>' + n[1] + '</span>' : n[1]) + '</a>'; }).join(''); };
    var two = function (a) { return p(a); };
    A.innerHTML =
      "<section class='hero2'><div class='w h2g'><div><div class='bc'><a href='/'>Home</a> › <a data-r href='" + href('services') + "'>Services</a> › " + s.bc + ' › ' + s.t + '</div><h1>' + s.t + "</h1><p class='lead'>" + s.d + "</p><p><a class='btn' " + ext(CFG.book) + '>' + s.btn + " →</a><a class='lnk' href='#loc' data-go='loc'>Find a Location →</a></p></div><div class='hph'>" + ph(s.t, pics[0], true) + '</div></div></section>' +
      "<div class='w'><div class='bens'>" + s.ben.map(function (b, i) { return '<div>' + BS[i] + '<b>' + b + '</b></div>'; }).join('') + '</div></div>' +
      "<nav class='onp' aria-label='On this page'><div class='w onpi'>" + nav('onp') + '</div></nav>' +
      "<nav class='rail' aria-label='On this page'>" + nav('rail') + "</nav><div class='prog'><i></i></div>" +
      "<section id='when' class='sec'><div class='w'><div class='callout'><h2>When You May Need " + s.t + '</h2><p>' + s.when + '</p></div></div></section>' +
      "<section id='sym' class='sec bl'><div class='w sy'><div>" + sh('Signs to look out for', 'You may need ' + s.t.toLowerCase() + ' if you notice any of the following:') + "<div class='note'>Noticed any of these? Book a check and our team will find the cause. <a " + ext(CFG.book) + '>Book now →</a></div></div><ol>' + s.sym.map(function (x) { return '<li>' + x + '</li>'; }).join('') + '</ol></div></section>' +
      "<section id='ins' class='sec insec'><div class='w'><div class='insx'><div class='insl'><h2>What We Inspect</h2><p>Our technicians inspect the key components involved, so you know what is checked and why.</p></div><ul class='insr'>" + s.ins.map(function (x) { return '<li>' + x + '</li>'; }).join('') + '</ul></div></div></section>' +
      "<section id='inc' class='sec incsec'><div class='w'>" + sh("What's Included", 'Our ' + s.t.toLowerCase() + ' service includes:') + "<div class='ic4'>" + s.inc.map(function (a) { var x = two(a); return '<div><b>' + x[0] + "</b><span class='mut'>" + x[1] + '</span></div>'; }).join('') + '</div></div></section>' +
      "<section id='proc' class='sec'><div class='w pr2'><div class='pl'>" + sh('How We Do It', 'A clear four-step process from check-in to hand over.') + "</div><ol class='pt'>" + s.proc.map(function (a) { var x = two(a); return '<li><b>' + x[0] + '</b><span>' + x[1] + '</span></li>'; }).join('') + '</ol></div></section>' +
      "<section id='why' class='sec bl'><div class='w'>" + sh('Why It Matters', '') + "<div class='bento'>" + s.why.map(function (a, i) { var x = two(a); return "<div class='b" + i + "'><b>" + x[0] + '</b><span>' + x[1] + '</span></div>'; }).join('') + '</div></div></section>' +
      "<section id='faq' class='sec'><div class='w fq'><div>" + sh('Frequently Asked Questions', 'Straight answers to the questions customers ask most.') + "<div class='note'>Still have a question? Call your nearest branch or <a " + ext(CFG.whatsapp) + '>Chat on WhatsApp</a>.</div></div><div>' + s.faq.map(function (x) { var q = p(x); return '<details><summary>' + q[0] + '</summary><p>' + q[1] + '</p></details>'; }).join('') + '</div></div></section>' +
      "<section class='sec al'><div class='w'>" + sh('Often Needed Together', 'These services are often needed together with ' + s.t.toLowerCase() + ':') + "<div class='rl'>" + s.rel.map(function (a) { var x = two(a), m = null; for (var i = 0; i < S.length; i++) if (S[i].t === x[0] || S[i].nav === x[0]) m = S[i]; var h = m ? m.id : (RM[x[0]] || 'services'); return "<a data-r href='" + href(h) + "'><div><b>" + x[0] + "</b><span class='mut'>" + x[1] + "</span></div><span class='ar'>→</span></a>"; }).join('') + '</div></div></section>' +
      "<section class='sec'><div class='w'><div class='banner'><div><h2>Book Your " + s.cta + " Today</h2><p>Book now at your nearest Mag City location and get it done properly the first time.</p></div><div><a class='btn' " + ext(CFG.book) + ">Book a Service →</a> <a class='btn o' href='#loc' data-go='loc'>Find a Location →</a></div></div></div></section>" +
      "<section id='loc' class='sec'><div class='w'>" + sh('Available at These Locations', s.t + ' is available at the following Mag City branches:') + "<div class='g3'>" + BR.map(function (b) { return "<div class='bm'><div><b>" + b[0] + '</b>' + (b[1] ? '<small>' + (op ? '● Open now' : 'Closed now') + ' · Mon–Fri 8–6, Sat 8–2</small><a href="' + tel(b[1]) + '">' + b[1] + '</a> · <a href="https://www.google.com/maps/search/?api=1&query=Mag+City+' + b[0] + '" target="_blank" rel="noopener">Directions</a>' : '<small>Opening soon</small>') + '</div></div>'; }).join('') + '</div></div></section>' +
      "<section class='al'><div class='w help'><div><h2>Need Help Choosing the Right Service?</h2><span class='mut'>Our team can help you determine the best service for your vehicle.</span></div><div><a class='btn' href='" + CFG.contact + "'>Contact Us →</a> <a class='btn o' " + ext(CFG.whatsapp) + '>Chat on WhatsApp →</a></div></div></section>';
  }

  /* ---------- behaviour ---------- */
  var io = null;
  function anim() {
    if (io) { io.disconnect(); io = null; }
    var q = '.sh,.callout,.sy>*,.sy li,.insx,.insr li,.ic4>div,.pt li,.bento>div,.fq>*,details,.rl a,.banner,.bm,.g3>*,.chip';
    var els = [].slice.call(A.querySelectorAll(q));
    if (!('IntersectionObserver' in window)) return;
    els.forEach(function (e, i) { e.classList.add('rv'); e.style.setProperty('--d', (i % 4) * 0.08 + 's'); });
    io = new IntersectionObserver(function (es) { es.forEach(function (x) { if (x.isIntersecting) { x.target.classList.add('in'); io.unobserve(x.target); } }); }, { threshold: 0.1 });
    els.forEach(function (e) { io.observe(e); });
  }

  var ticking = false;
  function spy() {
    ticking = false;
    var pg = root.querySelector('.prog i'); if (!pg) return;
    var r = host.getBoundingClientRect(), mx = r.height - innerHeight;
    pg.style.width = (mx > 0 ? Math.max(0, Math.min(100, -r.top / mx * 100)) : 0) + '%';
    var pt = root.querySelector('.pt');
    if (pt) { var b = pt.getBoundingClientRect(); pt.style.setProperty('--fill', Math.max(0, Math.min(1, (innerHeight * 0.65 - b.top) / b.height)) * 100 + '%'); }
    var cur = '';
    NV.forEach(function (n) { var e = root.getElementById(n[0]); if (e && e.getBoundingClientRect().top < innerHeight * 0.4) cur = n[0]; });
    [].forEach.call(root.querySelectorAll('.rail a,.onp a'), function (a) { a.classList.toggle('on', a.dataset.t === cur); });
  }
  addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(spy); } }, { passive: true });
  addEventListener('resize', spy);

  function setMeta(desc) {
    if (desc == null) { if (metaDesc && ORIG_DESC != null) metaDesc.setAttribute('content', ORIG_DESC); return; }
    if (!metaDesc) { metaDesc = document.createElement('meta'); metaDesc.name = 'description'; document.head.appendChild(metaDesc); }
    metaDesc.setAttribute('content', desc);
  }

  function route() {
    var id = ''; try { id = decodeURIComponent(location.hash.slice(1)); } catch (e) {}
    var s = g(id);
    if (s) { renderSvc(id); document.title = s.t + ' | Mag City'; setMeta(s.d); }
    else { renderHub(); document.title = ORIG_TITLE; setMeta(null); }
    anim(); spy();
  }

  function toTop() {
    var y = host.getBoundingClientRect().top + pageYOffset - (parseFloat(getComputedStyle(host).getPropertyValue('--mc-sticky-top')) || 0);
    if (pageYOffset > y) scrollTo(0, y);
  }
  function go(id) {
    var e = root.getElementById(id); if (!e) return;
    var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
    e.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
  }

  root.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a') : null; if (!a) return;
    if (a.hasAttribute('data-go')) { e.preventDefault(); go(a.getAttribute('data-go')); return; }
    if (a.hasAttribute('data-r') && !(e.metaKey || e.ctrlKey || e.shiftKey || e.button)) {
      e.preventDefault();
      var u = a.getAttribute('href');
      if (u !== location.pathname + location.hash) history.pushState(null, '', u);
      route(); toTop();
    }
  });
  root.addEventListener('change', function (e) { if (e.target && e.target.id === 'pv') pp(); });
  addEventListener('popstate', route);

  route();
})();
