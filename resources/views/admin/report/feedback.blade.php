@extends('admin.layouts.master')

@section('content')
<section class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12 mt-4">
            <div class="row align-items-center mb-4">
                    <div class="col-6">
                        <h3 class="fw-bold text-dark">Customer Feedback</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button type="button" class="btn btn-success" onclick="exportTableToExcel('salesTable')">
                            <i class="fas fa-file-excel"></i> Export To Excel
                        </button>
                    </div>
                </div>
                <!-- Filter Section -->
                <div class="card p-3 shadow-sm mb-4">
                    <form action="" method="" class="row g-3">
                        <div class="col-md-5">
                            <label class="form-label fw-bold">Start Date</label>
                            <input type="date" name="start_date" class="form-control" value="">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label fw-bold">End Date</label>
                            <input type="date" name="end_date" class="form-control" value="">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-dark w-100">🔍 Filter</button>
                        </div>
                    </form>
                </div>

                <!-- Table of Daily Sales -->

                    <table class="table table-bordered text-center" id="salesTable">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tbody>

                    </table>

                    <div class="alert alert-secondary text-center" role="alert">
                        🚨 No data found for this date range.
                    </div>

            </div>
        </div>
    </section>

    <!-- Include Chart.js and create a basic chart -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableId, filename = 'Customer_Feedback_Report.xlsx') {
            const table = document.getElementById(tableId);
            const workbook = XLSX.utils.table_to_book(table, {
                sheet: "Sheet1"
            });
            XLSX.writeFile(workbook, filename);
        }
    </script>
@endsection
