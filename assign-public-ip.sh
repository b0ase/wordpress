#!/bin/bash

# Oracle Cloud Instance Public IP Assignment Script
# Instance: instance-20251211-1610
# Private IP: 10.0.0.191

INSTANCE_OCID="ocid1.instance.oc1.iad.anuwcljtfzzmudacrl6s44kiau5oijx5nh2umskoxj2tzwyzxhaa4mdwcboa"
COMPARTMENT_ID="richardwboase"  # You'll need the actual OCID for the compartment

echo "Step 1: Getting VNIC attachments for the instance..."
# Get VNIC attachment
VNIC_ATTACHMENT=$(oci compute vnic-attachment list \
    --compartment-id $COMPARTMENT_ID \
    --instance-id $INSTANCE_OCID \
    --query "data[0].\"vnic-id\"" \
    --raw-output)

echo "VNIC ID: $VNIC_ATTACHMENT"

echo "Step 2: Getting VNIC details to find private IP OCID..."
# Get private IP OCID
PRIVATE_IP_OCID=$(oci network private-ip list \
    --vnic-id $VNIC_ATTACHMENT \
    --query "data[?\"ip-address\"=='10.0.0.191'].id | [0]" \
    --raw-output)

echo "Private IP OCID: $PRIVATE_IP_OCID"

echo "Step 3: Creating and assigning ephemeral public IP..."
# Create public IP and assign to private IP
PUBLIC_IP_RESPONSE=$(oci network public-ip create \
    --compartment-id $COMPARTMENT_ID \
    --lifetime EPHEMERAL \
    --private-ip-id $PRIVATE_IP_OCID \
    --wait-for-state AVAILABLE)

# Extract the public IP address
PUBLIC_IP=$(echo $PUBLIC_IP_RESPONSE | jq -r '.data."ip-address"')

echo "✅ Success! Public IP assigned: $PUBLIC_IP"
echo ""
echo "Instance Details:"
echo "- Instance Name: instance-20251211-1610"
echo "- Private IP: 10.0.0.191"
echo "- Public IP: $PUBLIC_IP"
echo "- Region: iad (US-Ashburn)"