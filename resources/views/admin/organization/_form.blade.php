@csrf

<div class="form-container">
    <div class="form-section">
        <h5 class="section-title">Organization Details</h5>
        <div class="form-grid">
            <div class="form-group full-width">
                <label>Organization Name <span class="required">*</span></label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name', $organization->name) }}"
                    placeholder="Enter organization name"
                    required
                >
            </div>

            <div class="form-group full-width">
                <label>Address</label>
                <textarea
                    name="address"
                    class="form-control"
                    rows="3"
                    placeholder="Enter organization address"
                >{{ old('address', $organization->address) }}</textarea>
            </div>

            <div class="form-group">
                <label>PIN Code</label>
                <input type="text" name="pin_code" class="form-control" value="{{ old('pin_code', $organization->pin_code) }}" placeholder="Enter PIN code">
            </div>

            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="{{ old('state', $organization->state) }}" placeholder="Enter state">
            </div>

            <div class="form-group">
                <label>District</label>
                <input type="text" name="district" class="form-control" value="{{ old('district', $organization->district) }}" placeholder="Enter district">
            </div>

            <div class="form-group">
                <label>Locality</label>
                <input type="text" name="locality" class="form-control" value="{{ old('locality', $organization->locality) }}" placeholder="Enter locality">
            </div>

            <div class="form-group">
                <label>Police Station</label>
                <input type="text" name="police_station" class="form-control" value="{{ old('police_station', $organization->police_station) }}" placeholder="Enter police station">
            </div>

            <div class="form-group">
                <label>Post Office</label>
                <input type="text" name="post_office" class="form-control" value="{{ old('post_office', $organization->post_office) }}" placeholder="Enter post office">
            </div>

            <div class="form-group full-width">
                <label>Status</label>
                <div class="status-switch-card">
                    <div>
                        <div class="status-switch-title">Active / Inactive</div>
                        <div class="status-switch-subtitle">Enable this organization for use in templates and masters.</div>
                    </div>
                    <label class="status-switch">
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" name="status" value="1" {{ old('status', (int) $organization->status) ? 'checked' : '' }}>
                        <span class="status-slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-footer">
    <a href="{{ route('admin.organizations.index') }}" class="btn-reset" style="text-decoration:none;display:inline-flex;align-items:center;justify-content:center;">Back</a>
    <button type="submit" class="btn-submit">{{ $submitLabel }}</button>
</div>
