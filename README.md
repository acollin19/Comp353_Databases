**Comp 353 Databases Final Project: A database Application System for the COVID-19 Non-Profit Health Organization**

A few examples of the requirements: 

Developing a database system, called COVID-19 Pandemic Progress System (C19PPS). The C19PPS system helps researchers, companies, and world population to keep track of the COVID-19 pandemic progress. The system divides the world into six regions and each country is composed of either provinces, states, or territories. Type of vaccinations could be Pfizer, Moderna, AstraZeneca, Johnson & Johnson, etc.
People from all over the world can use the system to view information related to the progress of COVID-19 in the world. Users can register their usernames with any author they are interested in her/his publications to receive a notification upon adding a new publication. This should be done through a trigger. Users with organization delegate privileges can add/delete/edit articles for their organization to the system. Administrator users have the privilege to remove any article from the system or suspend any account in the system.

Skills:

* Creating and populating a database to mimic the COVID 19 NPO. (MySQL)
* Using queries to select data
* Connecting to API to subscribe to emails.
* Creating a GUI to facilitate interaction with the database application (PHP/CSS/HTML)

*Example of type queries used:

*a) Get details of the progress of the COVID-19 for all the countries in the system. Details include region name, country name, number of populations in the country, number of people who got vaccinated for COVID-19, number of people who died due to COVID-19, number of people who got vaccinated at least one vaccine for COVID-19 and died due to COVID-19. Only the latest statistics provided for each country need to be displayed. Results should be displayed sorted in increasing order of the total number of people who died due to COVID-19.

*b) List all the emails that have been sent by the system to the registered users to receive new publications during a specific period of time. List should include the date and time of the email, the email address of the receiver of the email, and the subject of the email. The results should be displayed sorted from the oldest date to the newest date of the generation of the email for the specified period.


