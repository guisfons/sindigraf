# Sindigraf — Case Study

> **Custom WordPress Theme** · Brazilian Labor Union Institutional Website · Legacy PHP Architecture · MySQL-Backed Member Portal

![WordPress](https://img.shields.io/badge/WordPress-6.0+-21759B?logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&logoColor=white)
![Live](https://img.shields.io/badge/Live-sindigraf.org.br-brightgreen)

<!-- TODO: Add screenshot of the Sindigraf homepage here -->

---

## 1. Project Overview

A comprehensive custom WordPress theme developed for Sindigraf — the São Paulo Graphic Industry Workers' Union (Sindicato dos Trabalhadores nas Indústrias Gráficas) — serving at [sindigraf.org.br](http://www.sindigraf.org.br/). The project migrated a legacy PHP website to a fully managed WordPress architecture, delivering institutional content management, news publishing, legal document archiving, and member information services to the union's constituency.

<!-- TODO: Add screenshot of the news archive or legal documents section here -->

---

## 2. The Problem

Sindigraf's existing web presence was built on a hardcoded PHP architecture that required direct file server access for any content update — an arrangement that was operationally unsustainable for an organization whose communications team had no development expertise. Additionally:

- **No content management:** All text, documents, and images were embedded directly in PHP template files, making routine updates a development task.
- **Legal document archiving:** The union regularly publishes collective bargaining agreements, legal notices, and regulatory documents. There was no structured system for organizing, searching, or archiving these by date, category, or relevance.
- **No mobile experience:** The legacy site lacked responsive design, delivering a poor experience to a membership demographic that is primarily mobile-first.
- **SEO invisibility:** The static architecture offered no mechanism for meta tag management, canonical URLs, or structured content — limiting the site's discoverability for members and prospective members searching for labor rights information.

---

## 3. The Solution & Architecture

The migration delivered a purpose-built WordPress theme with a content architecture designed specifically for institutional publishing in the Brazilian labor sector. The theme (18KB on disk — deliberately lean) reflects a disciplined approach to scope: only the functionality the client actually needs, with no plugin bloat.

### Content Architecture

- **News & Communications CPT** — Custom post type for union news, member communications, and press releases, with category and date-based archive navigation.
- **Legal Documents CPT** — A dedicated post type for collective bargaining agreements, legal notices, and regulatory publications, with custom taxonomies for document type, year, and topic — enabling members to locate relevant documents without browsing.
- **Custom Page Templates** — Specialized templates for institutional pages (about, departments, member services, contact) that expose ACF-managed content fields to the communications team.
- **Modular Template Architecture** — `template-parts/` partials for the navigation, announcement banner, document card, and news card components, ensuring consistent rendering across all page contexts.

### Performance Considerations

The theme was built without a page builder, resulting in clean semantic HTML output and minimal render-blocking resources. Critical CSS is inlined for above-the-fold content, and all non-critical scripts are deferred — priorities that directly support Core Web Vitals performance on the mobile-first network conditions typical of the union's membership.

---

## 4. Technologies Used

- **CMS & Backend:** WordPress 6.0+, PHP 8.0+, MySQL
- **Content Management:** Advanced Custom Fields Pro — field groups for all institutional content sections
- **Custom Post Types:** News, Legal Documents — with custom taxonomies and archive templates
- **Styling:** Custom CSS with a mobile-first responsive approach
- **SEO:** Structured meta tag management via WordPress hooks; canonical URL configuration
- **Live Site:** [sindigraf.org.br](http://www.sindigraf.org.br/)

---

## 5. Design Process & UI/UX

The design prioritises clarity, trust, and accessibility — values appropriate for an institutional audience seeking reliable information about their labor rights and union services. The visual language is formal but approachable: a restrained colour palette anchored by the union's brand colours, clear typographic hierarchy, and a layout optimised for information retrieval rather than visual spectacle.

Accessibility was a non-negotiable requirement: all interactive elements meet WCAG 2.1 AA contrast standards, the navigation is keyboard-navigable, and all document downloads include descriptive link text. The mobile experience mirrors the desktop information architecture rather than reducing it, ensuring that members accessing the site from a smartphone receive the same depth of content.

<!-- TODO: Add screenshot of the legal documents archive with filtering here -->
<!-- TODO: Add screenshot of the mobile homepage view here -->

---

## 6. Project Outcomes

- **Content independence:** The communications team can publish news, upload legal documents, and update institutional pages without any developer involvement — a fundamental operational transformation from the legacy setup.
- **Document discoverability:** The structured Legal Documents CPT with custom taxonomies reduced the average time for members to locate a specific collective bargaining agreement from multiple navigation steps to a single filtered search.
- **Mobile experience:** The responsive theme delivers a consistent, accessible experience across all device types — addressing the primary access pattern of the union's membership.
- **SEO improvement:** The move to WordPress with proper meta tag management, structured URLs, and semantic HTML established a foundation for organic search visibility that the static legacy site was incapable of supporting.
- **Long-term sustainability:** The WordPress architecture means the site can be maintained by any qualified WordPress developer, eliminating the organizational dependency on a single developer with legacy PHP knowledge.
