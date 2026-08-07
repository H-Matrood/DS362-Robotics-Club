<?php include 'includes/header.php'; ?>

<main>

    <section>

        <h2>Upcoming Events</h2>

        <p>
            Explore the upcoming activities organized by the Robotics Club.
            Students can participate in workshops, competitions, and seminars.
        </p>

        <!-- List of upcoming events -->
        <div class="event-container">

            <!-- Event 1 -->
            <div class="event-card">
                <h3>Robotics Workshop</h3>
                <p><strong>Date:</strong> August 20, 2026</p>
                <p><strong>Time:</strong> 2:00 PM</p>
                <p><strong>Location:</strong> Engineering Building</p>
                <p>Learn the basics of robotics and build a simple robot.</p>

                <a href="event-details.php?id=1">
                    <button>View Details</button>
                </a>
            </div>

            <!-- Event 2 -->
            <div class="event-card">
                <h3>Programming Competition</h3>
                <p><strong>Date:</strong> August 28, 2026</p>
                <p><strong>Time:</strong> 10:00 AM</p>
                <p><strong>Location:</strong> Computer Lab</p>
                <p>Join a programming challenge and compete with other students.</p>

                <a href="event-details.php?id=2">
                    <button>View Details</button>
                </a>
            </div>

            <!-- Event 3 -->
            <div class="event-card">
                <h3>AI Seminar</h3>
                <p><strong>Date:</strong> September 5, 2026</p>
                <p><strong>Time:</strong> 1:00 PM</p>
                <p><strong>Location:</strong> Conference Hall</p>
                <p>Discover how artificial intelligence is used in robotics.</p>

                <a href="event-details.php?id=3">
                    <button>View Details</button>
                </a>
            </div>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>