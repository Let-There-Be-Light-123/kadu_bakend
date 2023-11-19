<?php
// app/Http/Controllers/DatabaseController.php

namespace App\Http\Controllers;

use App\Services\DatabaseService;

class DatabaseController extends Controller
{
    public function fetchUsers()
    {
        try {
            $connection = DatabaseService::connect();

            // Perform a query to fetch users from the "users" table
            $result = $connection->query('SELECT * FROM users_table');

            if ($result) {
                // Fetch the results as an associative array
                $users = $result->fetch_all(MYSQLI_ASSOC);

                // If users are found, return them as a JSON response
                if ($users) {
                    return response()->json(['users' => $users]);
                } else {
                    return response()->json(['message' => 'No users found.']);
                }
            } else {
                // If the query fails, return an error message
                return response()->json(['error' => $connection->error], 500);
            }
        } catch (\Exception $e) {
            // If an exception occurs during connection, return an error message
            return response()->json(['error' => $e->getMessage()], 500);
        } finally {
            // Close the connection (optional, as Laravel will automatically close it at the end of the request)
            if (isset($connection)) {
                $connection->close();
            }
        }
    }
}
