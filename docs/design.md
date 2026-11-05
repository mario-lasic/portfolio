# Portfolio design

## Agreed direction

A modern dark portfolio with restrained Mauve Shadow accents, clear typography and generous spacing.
The layouts and colour direction were accepted on 19 October 2026. Small visual refinements will continue
when the pages are implemented.

The user also accepted the reference-led refinement shown below, including the rounded cards and buttons.
It is the agreed starting point for implementation; remaining small visual details will be resolved while building.

Use a near-black background. Start with `#141013` for the page and `#1D161B` for subtly raised surfaces;
the user is comfortable with either dark shade and will compare them during implementation.
Keep the page background solid and visually neutral. Mauve belongs on selected controls, icons and card
surfaces; the whole page should not have a purple glow or colour wash.

## References and sketches

- [Coolors: Mauve Shadow](https://coolors.co/tailwind/4b3b47), based on `#4B3B47`, provides the colour family.
- The user's three Coolors component screenshots clarify the finish: flat near-black panels, restrained
  mauve surfaces, rounded cards and pill-shaped buttons. The pricing-card examples guide the subtle
  top-to-bottom Skills gradient; their dashboard content is not part of the portfolio.
- [Wendo's portfolio](https://wendoj.vercel.app/) informed the prominent introduction and spacious composition.
- The home sketch below refines the accepted layout using the supplied component examples. It guides
  surface and card treatment; the exact starting colours are recorded above and in the palette table.
- The projects sketches further below preserve their accepted layouts in an earlier palette. Apply the
  current Mauve Shadow palette to those layouts during implementation.

![Desktop home refinement following the supplied Mauve Shadow component examples](sketches/home-desktop-mauve-v2.png)

## Palette

| Role | Hex |
| --- | --- |
| Starting page background | `#141013` |
| Alternative page background / subtly raised surfaces | `#1D161B` |
| Skills gradient: top | `#392D36` |
| Skills gradient: bottom | `#1D161B` |
| Quiet decorative borders | `#4B3B47` |
| Secondary control outline | `#725A6C` |
| Primary text and headings | `#F4F1F3` |
| Secondary text | `#D2C6CF` |
| Links and monochrome icons | `#BCA9B7` |
| Primary button background | `#A58D9F` |
| Text on filled primary buttons | `#141013` |
| Validation error text and borders | `#E6A1A8` |

Use the dark base colour for borders and surfaces, with lighter shades for text and interactive accents.
Keep all technology icons monochrome, matching the link colour, with readable names alongside them.

Calculated contrast ratios for the selected solid colours:

| Foreground | Page `#141013` | Surface `#1D161B` | Lightest card area `#392D36` |
| --- | --- | --- | --- |
| Primary text | 16.82:1 | 15.83:1 | 11.68:1 |
| Secondary text | 11.42:1 | 10.75:1 | 7.94:1 |
| Mauve accent | 8.53:1 | 8.03:1 | 5.93:1 |

Dark text on the filled mauve button has a calculated contrast of 6.21:1. Decorative borders are separate
from focus indicators; control states and focus will be specified in PORT-04.05 and checked on their actual
backgrounds during implementation.

## Typography

- **Headings:** [Cormorant Garamond](https://fonts.google.com/specimen/Cormorant+Garamond), weight 600.
  Fallbacks: Georgia and the generic serif family.
- **Body, navigation and controls:** [Source Sans 3](https://fonts.google.com/specimen/Source+Sans+3), weight 400
  for paragraphs and 600 for navigation and controls. Fallbacks: Arial and the generic sans-serif family.

Both families use the SIL Open Font License 1.1. Licence files:
[Cormorant Garamond](https://github.com/google/fonts/blob/main/ofl/cormorantgaramond/OFL.txt),
[Source Sans 3](https://github.com/google/fonts/blob/main/ofl/sourcesans3/OFL.txt).

| Element | Desktop | Mobile |
| --- | --- | --- |
| Main heading | 64 px | 42 px |
| Section heading | 40 px | 32 px |
| Project heading | 28 px | 24 px |
| Body text | 18 px | 16 px |

Start with a line height of 1.15 for headings and 1.65 for paragraphs. Check these values with real content
when building the pages.

Home section headings have a 2 px decorative line below them. Its gradient spans the heading block and
fades from mauve to transparent by 20% of its width below 768 px, or by 15% from 768 px.

## Spacing and surfaces

- Spacing scale: 8, 16, 24, 32, 48, 64 and 96 px.
- Maximum main content width: 1120 px.
- Side padding: 24 px on desktop and 20 px on mobile.
- Initial section spacing: 96 px on desktop and 64 px on mobile.
- Use quiet neutral dividers, starting at `#302930`, rather than bright accent rules across the page.
- Start with approximately 16 px corner radii on cards, following the supplied component examples.
- Use pill-shaped primary and secondary action buttons, with flat fills and fine outlines.
- Start with approximately 8 px corner radii on form fields.
- Skills cards use a subtle straight vertical gradient from `#392D36` at the top to `#1D161B` at the bottom.
- Keep the remaining page surfaces calm. The project introduction may have a faint mauve gradient on its
  right side, fading into the near-black background.
- Use restrained borders and shadows. Keep the focus on content and project screenshots.
- Keep broad page areas solid; confine the Skills gradients to their cards.

## Home page

### Mobile structure

1. Header with Mario Lasić's name and a menu button.
2. Full-width introduction with Junior Backend Developer as the main heading, PHP & Laravel as a smaller
   mauve line below it, and the agreed introductory paragraph from content.md.
3. Actions below the introduction: primary View projects and a quieter Get in touch link to the contact
   section.
4. About me using the agreed background and career-change text, followed by the CV download card.
5. Skills in three groups: Backend, Frontend and Tools and platforms.
6. Contact form with Name, Email, Message, Send message and mario.lasic@proton.me.
7. Compact footer with copyright, GitHub and LinkedIn.

### Desktop structure

- Preserve the same section order.
- Place the introduction on the left and the action buttons in a separate column on the right.
- Show desktop navigation links in the header.
- Align the name in the header with the left edge of the main content while retaining its visible focus
  and usable click area.
- Keep About text at a comfortable reading width, with the CV download card in a column to its right.
- Arrange the three skills groups in one row when the viewport is at least 1280 px wide.
- Centre the contact form; Name and Email may share a row above Message.
- Place copyright on the left and professional links on the right of the footer.

### CV download card

- Place the card beside the About text when there is enough horizontal space, and below it on narrow
  screens. The Download CV action belongs here rather than in the hero action group.
- Start with a card approximately 240–280 px wide on desktop, using surface `#1D161B`, a quiet `#4B3B47`
  border and a 16 px corner radius.
- Include a circular detail approximately 48 px across with a document icon or the letters CV.
- Use the title Curriculum vitae, metadata PDF · English and a clear secondary Download CV action.
- Link to `/files/mario-lasic-cv.pdf` for downloading the existing PDF.
- Keep About's 85ch text width as a maximum; let its actual width adapt to the space beside the card.

### Skills cards

- Use three cards: Backend, Frontend and Tools and platforms. This replaces the four-card arrangement in
  the earlier sketch, following the user's decision during implementation.
- Stack the cards below 1280 px and use three equal columns from 1280 px. Use gaps of 16 px and 24 px,
  respectively.
- Keep headings and skill lists visible.
- Centre the category headings and arrange each card's skill list in two columns, keeping the three
  cards equally tall when displayed in one row.
- Put recognisable technology icons beside their written names, using the same light mauve as links.
- Use 20 × 20 px icons with 8 px between each icon and its label. PHP and PDO share the PHP icon.
- Skills labels use 16 px text below 768 px and 18 px from 768 px. Use an 8 px grid gap between items.
- Give cards 24 px internal padding, a 16 px corner radius, a quiet `#4B3B47` border and the subtle
  top-to-bottom gradient specified above. Leave 24 px between each card heading and its list, and 24 px
  between the Skills section heading and the cards.
- The accepted sketch is the starting point. Refine icon size, internal spacing and card balance in
  PORT-06.02, then check the complete home page at multiple widths in PORT-06.04.

### Professional links

Include a GitHub icon beside GitHub and a LinkedIn icon beside LinkedIn in the shared footer on both screen
sizes. Icons and link text use light mauve, and the written names remain visible.

### Stylesheets

- `resources/css/app.css` contains the shared palette, typography, layout primitives, buttons, navigation
  and footer styles, and imports the Home stylesheet after Tailwind.
- `resources/css/pages/home.css` contains the hero, About, CV and Skills styles. Section spacing is
  limited to adjacent `.home-section` elements.

## Projects listing

The listing was revised on 5 November 2026 to use project cards in a grid. The earlier sketch is retained
as a visual reference; the layout below is the current specification.

![Earlier projects listing sketch](sketches/projects-desktop-mobile.png)

- Shared header and footer, with Projects marked as the current page.
- Heading: Projects. Introductory sentence: Practical projects built while learning backend development.
- Two equal card columns with a gap inside the shared content container on wide screens; one column on
  narrow screens. Choose the breakpoint according to readable card content.
- The front of each card shows the cover image with the project title below it.
- On devices that support hover, a subtle flip reveals the title, short summary and View project link.
- Keyboard focus must also reveal the summary and provide access to the details link.
- On touch devices without convenient hover, show the image, title, summary and details link together.
- With reduced motion enabled, use a static presentation containing the same content and link.
- For GymLog, use workout-details.png and the summary from content.md. It is a Local learning project
  with no public demo; the details page provides its status, technologies and source-code link.
- Preserve screenshot proportions. Accommodate long titles and summaries without clipping or layout
  jumps when changing card faces. Add projects using the same card component and data structure.

## Project details

The manual carousel was accepted on 19 October 2026. The text layout was revised on 5 November 2026 to
provide a longer project description in one Markdown document. Apply the current palette and faint mauve
introduction gradient. The earlier sketch remains a reference for the header and carousel.

![Earlier project details layout and carousel sketch](sketches/project-details-desktop-mobile.png)

1. Shared header, then Back to projects.
2. Project name, summary, technologies with monochrome icons, textual status and View source code.
3. One image carousel containing the project's screenshots. GymLog starts with Workout details and has
   five images in total.
4. A readable article explaining the application's purpose, workflow, key features and backend
   implementation. GymLog uses About the project, Key features and Backend implementation headings.
5. Back to projects near the shared footer.

Project metadata and image descriptions live in config/projects.php. The content_file value identifies
one Markdown document relative to resources; GymLog uses content/projects/gymlog/details.md. Laravel will
read and render that content for the common details page. The article's headings and paragraphs flow
naturally on both desktop and mobile.

Use manual Previous and Next controls, a visible caption and image counter, without automatic advancement.
Preserve image proportions and allow keyboard operation of the controls. Disable Previous on the first image
and Next on the last; hide unnecessary navigation when a project has only one image. The number of images
comes from the project data, and future projects use the same template.

Use the original screenshot files and approved descriptions from content.md. Generated sketches guide
visual decisions; they are not screenshot or logo assets for the application.

## Navigation and interactive states

The following behaviour and state board were accepted on 19 October 2026.

![Accepted mobile menu, control states and contact-form feedback](sketches/interaction-states.png)

### Navigation destinations

| Link | Destination |
| --- | --- |
| Mario Lasić and Home | `/` |
| Projects and View projects | `/projects` |
| Contact and Get in touch | `/#contact`, including from project pages |
| A project's View project | `/projects/{slug}` |
| Back to projects | `/projects` |
| Download CV | `/files/mario-lasic-cv.pdf` |

Projects remains the active section on both the listing and the project-details pages. Identify the active
page with an underline or marker as well as colour.

### Mobile navigation

- Open a simple list of Home, Projects and Contact below the header, moving page content down.
- The toggle changes from a menu icon to a close icon and communicates its open or closed state.
- Close on a second toggle, link selection or Escape. Escape returns focus to the toggle.
- Keep the links in the normal keyboard tab order while open; hidden links must not receive focus.
- Keep this a straightforward expanding navigation list with ordinary links.

### Links, buttons and focus

- Primary button: `#A58D9F` with dark text; hover: `#BCA9B7` with dark text.
- Outline buttons retain their shape and gain a clearer mauve border or surface on hover.
- Text links retain a recognisable link treatment; hover brightens or underlines them.
- Keyboard focus uses a separate visible light-mauve outline, starting at 2 px thick with a 3 px gap.
  The focused state is distinguishable from hover and works on links, buttons and form controls.
- Unavailable controls have a muted appearance and cannot trigger their action. While a form request is
  running, the submit button is unavailable and its label changes to Sending….

### Contact form

| State | Feedback and behaviour |
| --- | --- |
| Ready | Show labelled Name, Email and Message fields and the Send message button. |
| Sending | Show Sending… and prevent a second submission while the request is running. |
| Validation error | Keep the entered values and show a specific error below the affected field, for example Please enter a valid email address. |
| Success | After the mail service accepts the request, show Thanks! Your message has been sent. and reset the fields. |
| Service or network failure | Keep all entered values and show Your message couldn’t be sent. Please try again or email me directly. |
| Rate limit | Keep entered values and show Too many attempts. Please wait before trying again. Respect any retry time returned by the server. |

Keep the alternative contact mario.lasic@proton.me available. Success means the mail service accepted the
request; it does not promise delivery to the recipient's inbox.

Validation errors use muted rose (`#E6A1A8`) with explicit text and an affected-field indicator. Success uses
clear text and a check indicator. Convey feedback without relying on colour alone, and announce dynamic
status changes to assistive technology. Preserve a visible keyboard focus throughout interaction.

These behaviours follow the [W3C disclosure-navigation example](https://www.w3.org/WAI/ARIA/apg/patterns/disclosure/examples/disclosure-navigation/)
and [W3C form-notification guidance](https://www.w3.org/WAI/tutorials/forms/notifications/).

## Implementation handoff

The design decisions are ready for implementation. Build the shared layout in PORT-05, the home page in
PORT-06, projects and their carousel in PORT-07, and the working contact flow in PORT-08. Continue small visual
refinements during implementation and verify behaviour on actual mobile and desktop layouts.
